<?php

/* article.html.twig */
class __TwigTemplate_8a5b3f29f66cb71fde1856e5d3a1c5a557e2a36a63198e4dbd231272e950ebf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 3
            $this->env->getExtension('form')->renderer->setTheme((isset($context["commentForm"]) ? $context["commentForm"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\">
    <h2 id=\"artitle\">";
        // line 9
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), 0, 30), "html", null, true);
        echo "</h2>
    <div id=\"viewArt\" class=\"white\">
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "</p>
    ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "    <div id=\"adminAction\">
    <form action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Editer\" />
    </form>
    <form action=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">
    <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\" />
    </form>
    </div>
    </div><br/>
    ";
        }
        // line 23
        echo "        <h3 id=\"comtitle\">Commentaires</h3>
    <div id=\"coms\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 26
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "</strong> à dit : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "<br>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        ✘ Il n'y à encore aucun commentaire ! <br/>
        Sois le premier à donner ton avis !
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "     <h3>Réagir à cet article.</h3>
    ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 33
            echo "   
        ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : null), 'form_start');
            echo "

        ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "email", array()), 'row');
            echo "
        ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "email", array()), 'widget');
            echo "

        ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "website", array()), 'row');
            echo "
        ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "website", array()), 'widget');
            echo "

        ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "content", array()), 'row');
            echo "
        ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "content", array()), 'widget');
            echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Poster !\" />
            </div>
        </div>
        ";
            // line 50
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["commentForm"]) ? $context["commentForm"] : null), 'form_end');
            echo "
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 52
                echo "            <div class=\"alert alert-success\">
                ";
                // line 53
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
        } else {
            // line 57
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connectez-vous</a> pour ajouter un commentaire !
    ";
        }
        // line 59
        echo "    </div>
   
    </div>
";
    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 59,  171 => 57,  168 => 56,  159 => 53,  156 => 52,  152 => 51,  148 => 50,  138 => 43,  134 => 42,  129 => 40,  125 => 39,  120 => 37,  116 => 36,  111 => 34,  108 => 33,  106 => 32,  103 => 31,  95 => 28,  85 => 26,  80 => 25,  76 => 23,  67 => 17,  61 => 14,  58 => 13,  56 => 12,  52 => 11,  47 => 9,  44 => 8,  41 => 7,  35 => 5,  31 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article.html.twig", "C:\\wamp\\www\\MicroCMS\\views\\article.html.twig");
    }
}
