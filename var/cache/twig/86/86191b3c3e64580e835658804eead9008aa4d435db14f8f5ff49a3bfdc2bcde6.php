<?php

/* layout.html.twig */
class __TwigTemplate_bcb6d73a6f159d696cf2353105753b36aa42467f1f6c82ca0e556d256b4dec0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/microcms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Molle:400i\" rel=\"stylesheet\">
    <title>tinyCMS - ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    <div class=\"container\">
        <nav id=\"pager\"><button id='upClick'>▲</button> <button id='downClick'>▼</button></nav>
        <nav class=\"navbar navbar-default navbar-fixed-bottom navbar-inverse\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-target\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">my<i>tiny</i>cms</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                            <li class=\"";
            if (array_key_exists("adminMenu", $context)) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                        ";
        }
        // line 30
        echo "                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 31
            echo "                            <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Hey, ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion...</a></li>
                                </ul>
                            </li>
                        ";
        } else {
            // line 39
            echo "                            <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Vous n'êtes pas connecté ! <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion...</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 47
        echo "                    </ul>
                </div>
            </div><!-- /.container -->
        </nav>
    </div>
<div class=\"container\" id=\"contenu\"> 
";
        // line 53
        $context["_splash"] =         $this->renderBlock("splash", $context, $blocks);
        // line 54
        if ( !twig_test_empty((isset($context["_splash"]) ? $context["_splash"] : null))) {
            // line 55
            echo "    ";
            echo (isset($context["_splash"]) ? $context["_splash"] : null);
            echo "
";
        }
        // line 56
        echo "      
        <section id=\"content\" class=\"content-section text-center\">";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        echo "</section>
        <br/>
        ";
        // line 59
        $context["_contact"] =         $this->renderBlock("contact", $context, $blocks);
        // line 60
        if ( !twig_test_empty((isset($context["_contact"]) ? $context["_contact"] : null))) {
            // line 61
            echo "<section id=\"contact\" class=\"content-section text-center\">";
            $this->displayBlock('contact', $context, $blocks);
            echo "</section>
";
        }
        // line 62
        echo "    
        
    </div>
    <!-- jQuery -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JavaScript Main -->
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_contact($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  171 => 57,  166 => 10,  158 => 70,  153 => 68,  148 => 66,  142 => 62,  136 => 61,  134 => 60,  132 => 59,  127 => 57,  124 => 56,  118 => 55,  116 => 54,  114 => 53,  106 => 47,  99 => 43,  93 => 39,  86 => 35,  81 => 33,  77 => 31,  74 => 30,  64 => 28,  62 => 27,  55 => 23,  39 => 10,  34 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\wamp\\www\\MicroCMS\\views\\layout.html.twig");
    }
}
