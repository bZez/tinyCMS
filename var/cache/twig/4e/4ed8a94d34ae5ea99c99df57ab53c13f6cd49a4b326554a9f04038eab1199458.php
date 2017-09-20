<?php

/* admin.html.twig */
class __TwigTemplate_618422e2f75af63bf532c3e652551a2818da30728a2fe26e17a71d44f72522ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin.html.twig", 1);
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
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\">
<h2 id=\"admtitle\" class=\"text-center\">";
        // line 8
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
<div id=\"admin\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "<div class=\"alert alert-success\">
    ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
        <ul class=\"nav nav-tabs nav-justified\">
            <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Articles</a></li>
            <li><a href=\"#comments\" data-toggle=\"tab\">Commentaires</a></li>
            <li><a href=\"#users\" data-toggle=\"tab\">Utilisateurs</a></li>
        </ul>
    </div>
</div>
<div class=\"tab-content\">
    <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
        ";
        // line 26
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 27
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Corps</th>
                        <th></th>  <!-- boutons actions -->
                    </tr>
                </thead>
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 37
                echo "                <tr>
                    <td><a class=\"articleTitle\" href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["article"], "content", array()), 60), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Editer\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#articleDialog";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"articleDialog";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Veuillez confirmer !</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Voulez-vous vraiment supprimer cet article ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Valider</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </table>
        </div>
        ";
        } else {
            // line 67
            echo "        <div class=\"alert alert-warning\">Aucun article trouvé.</div>
        ";
        }
        // line 69
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article</button></a>
    </div>
    <div class=\"tab-pane fade adminTable\" id=\"comments\">
        <!-- Insérer ici le code de gestion des commentaires -->
        ";
        // line 73
        if ((isset($context["comments"]) ? $context["comments"] : null)) {
            // line 74
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Auteur</th>
                        <th>Corps</th>
                        <th></th>  <!-- boutons d'action -->
                    </tr>
                </thead>
                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 85
                echo "                <tr>
                    <td><a class=\"articleTitle\" href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "title", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "content", array()), 60), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Editer\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#commentDialog";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"commentDialog";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Voulez-vous vraiment supprimer ce commentaire ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Valider</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "            </table>
        </div>
        ";
        } else {
            // line 116
            echo "        <div class=\"alert alert-warning\">Aucun commentaire trouvé.</div>
        ";
        }
        // line 118
        echo "    </div>
    <div class=\"tab-pane fade adminTable\" id=\"users\">
        ";
        // line 120
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 121
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover table-condensed\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Rôle</th>
                        <th></th>  <!-- bouton d'action -->
                    </tr>
                </thead>
                ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 131
                echo "                <tr>
                    <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a></td>
                    <td>
                        ";
                // line 134
                if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 135
                    echo "                            Admin
                        ";
                } else {
                    // line 137
                    echo "                            Utilisateur
                        ";
                }
                // line 139
                echo "                    </td>
                    <td>
                        <a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Editer\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#userDialog";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                        </button>
                        <div class=\"modal fade\" id=\"userDialog";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation needed</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        Voulez-vous vraiment supprimer ce compte ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                        <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Valider</a>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "            </table>
        </div>
        ";
        } else {
            // line 167
            echo "        <div class=\"alert alert-warning\">Aucun compte trouvé.</div>
        ";
        }
        // line 169
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</button></a>
    </div>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 169,  333 => 167,  328 => 164,  314 => 156,  299 => 144,  294 => 142,  290 => 141,  286 => 139,  282 => 137,  278 => 135,  276 => 134,  271 => 132,  268 => 131,  264 => 130,  253 => 121,  251 => 120,  247 => 118,  243 => 116,  238 => 113,  224 => 105,  209 => 93,  204 => 91,  200 => 90,  195 => 88,  191 => 87,  185 => 86,  182 => 85,  178 => 84,  166 => 74,  164 => 73,  156 => 69,  152 => 67,  147 => 64,  133 => 56,  118 => 44,  113 => 42,  109 => 41,  104 => 39,  98 => 38,  95 => 37,  91 => 36,  80 => 27,  78 => 26,  65 => 15,  56 => 12,  53 => 11,  49 => 10,  44 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.html.twig", "C:\\wamp\\www\\MicroCMS\\views\\admin.html.twig");
    }
}
