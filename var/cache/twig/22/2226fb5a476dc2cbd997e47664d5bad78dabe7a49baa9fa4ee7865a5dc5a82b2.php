<?php

/* login.html.twig */
class __TwigTemplate_2418871018ad21bc3b72c8307ac5c6583d8949ea827595b5bd88cbd70dad4cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
<h2 id=\"logtitle\">";
        // line 7
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "<div class=\"alert alert-danger\">
    <strong>Erreur de login !</strong> ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
</div>
";
        }
        // line 13
        echo "<div id=\"viewLogin\">
    <form class=\"form-signin form-horizontal\" role=\"form\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
            <input type=\"text\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Entrez votre nom\" required autofocus>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Entrez votre mot de passe\" required>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                <button type=\"submit\" class=\"btn btn-default btn-primary\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</button>
            </div>
        </div>
    </form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  59 => 14,  56 => 13,  50 => 10,  47 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html.twig", "C:\\wamp\\www\\MicroCMS\\views\\login.html.twig");
    }
}
