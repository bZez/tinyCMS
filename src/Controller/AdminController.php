<?php

namespace MicroCMS\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use MicroCMS\Domain\Article;
use MicroCMS\Domain\User;
use MicroCMS\Form\Type\ArticleType;
use MicroCMS\Form\Type\CommentType;
use MicroCMS\Form\Type\UserType;

class AdminController {

    /**
     * Admin home page controller.
     *
     * @param Application $app Silex application
     */
    public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
        $comments = $app['dao.comment']->findAll();
        $users = $app['dao.user']->findAll();
        return $app['twig']->render('admin.html.twig', array(
            'articles' => $articles,
            'comments' => $comments,
            'users' => $users));
    }

    /**
     * Ajout d'article controller.
     *
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function addArticleAction(Request $request, Application $app) {
        $article = new Article();
        $articleForm = $app['form.factory']->create(ArticleType::class, $article);
        $articleForm->handleRequest($request);
        if ($articleForm->isSubmitted() && $articleForm->isValid()) {
            $app['dao.article']->save($article);
            $app['session']->getFlashBag()->add('success', 'L\'article à été correctement crée.');
        }
        return $app['twig']->render('article_form.html.twig', array(
            'title' => 'Nouvel article',
            'articleForm' => $articleForm->createView()));
    }

    /**
     * Edit d'article controller.
     *
     * @param integer $id Article id
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function editArticleAction($id, Request $request, Application $app) {
        $article = $app['dao.article']->find($id);
        $articleForm = $app['form.factory']->create(ArticleType::class, $article);
        $articleForm->handleRequest($request);
        if ($articleForm->isSubmitted() && $articleForm->isValid()) {
            $app['dao.article']->save($article);
            $app['session']->getFlashBag()->add('success','L\'article à été correctement mis à jour.');
        }
        return $app['twig']->render('article_form.html.twig', array(
            'title' => 'Article' ,
            'articleForm' => $articleForm->createView()));
    }

    /**
     * Suppr. d'article controller.
     *
     * @param integer $id Article id
     * @param Application $app Silex application
     */
    public function deleteArticleAction($id, Application $app) {
        // Supprime les commentaires associés
        $app['dao.comment']->deleteAllByArticle($id);
        // Supprime l'article
        $app['dao.article']->delete($id);
        $app['session']->getFlashBag()->add('success','L\'article à été correctement supprimé !');
        // Redirection à la page admin
        return $app->redirect($app['url_generator']->generate('admin'));
    }

    /**
     * Edit commentaire controller.
     *
     * @param integer $id Comment id
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function editCommentAction($id, Request $request, Application $app) {
        $comment = $app['dao.comment']->find($id);
        $commentForm = $app['form.factory']->create(CommentType::class, $comment);
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $app['dao.comment']->save($comment);
            $app['session']->getFlashBag()->add('success', 'Le commentaire à été correctement mis à jour !');
        }
        return $app['twig']->render('comment_form.html.twig', array(
            'title' => 'Commentaire',
            'commentForm' => $commentForm->createView()));
    }

    /**
     * Suppr commentaire controller.
     *
     * @param integer $id Comment id
     * @param Application $app Silex application
     */
    public function deleteCommentAction($id, Application $app) {
        $app['dao.comment']->delete($id);
        $app['session']->getFlashBag()->add('success', 'Le commentaire à été correctement supprimé !');
        // Redirect to admin home page
        return $app->redirect($app['url_generator']->generate('admin'));
    }

    /**
     * Ajout utilisateur controller.
     *
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function addUserAction(Request $request, Application $app) {
        $user = new User();
        $userForm = $app['form.factory']->create(UserType::class, $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            // random salt
            $salt = substr(md5(time()), 0, 23);
            $user->setSalt($salt);
            $plainPassword = $user->getPassword();
            // defaut
            $encoder = $app['security.encoder.bcrypt'];
            // encodage password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password); 
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'Utilisateur crée avec succès !');
        }
        return $app['twig']->render('user_form.html.twig', array(
            'title' => 'Nouvel user',
            'userForm' => $userForm->createView()));
    }

    /**
     * Edition utilisateur controller.
     *
     * @param integer $id User id
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function editUserAction($id, Request $request, Application $app) {
        $user = $app['dao.user']->find($id);
        $userForm = $app['form.factory']->create(UserType::class, $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $plainPassword = $user->getPassword();
            // trouver l'encodage
            $encoder = $app['security.encoder_factory']->getEncoder($user);
            // encodage
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password); 
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'Utilisateur modifié avec succès !.');
        }
        return $app['twig']->render('user_form.html.twig', array(
            'title' => 'User',
            'userForm' => $userForm->createView()));
    }

    /**
     * Suppr. utilisateur controller.
     *
     * @param integer $id User id
     * @param Application $app Silex application
     */
    public function deleteUserAction($id, Application $app) {
        // Supprimer tout les commentaire associés
        $app['dao.comment']->deleteAllByUser($id);
        // Delete the user
        $app['dao.user']->delete($id);
        $app['session']->getFlashBag()->add('success', 'Utilisateur supprimé !.');
        // Redirection page admin
        return $app->redirect($app['url_generator']->generate('admin'));
    }
}
