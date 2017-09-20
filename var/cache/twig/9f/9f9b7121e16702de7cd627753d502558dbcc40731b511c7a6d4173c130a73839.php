<?php

/* article_form.html.twig */
class __TwigTemplate_c6ba53ab0a0249da8c0b893891caa8f2e635baeaf0ea8fb99758794f19c8030f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article_form.html.twig", 1);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["articleForm"]) ? $context["articleForm"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\">
    <h2 class=\"text-center\">";
        // line 9
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"alert alert-success\">
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
        echo "
    <div class=\"well\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : null), 'form_start');
        echo "
        
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : null), "title", array()), 'row');
        echo "                   
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : null), "title", array()), 'widget');
        echo "

        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : null), "content", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : null), "content", array()), 'widget');
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Poster\" />
            </div>
        </div>
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : null), 'form_end');
        echo "
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "article_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  88 => 23,  84 => 22,  79 => 20,  75 => 19,  70 => 17,  66 => 15,  57 => 12,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  40 => 7,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article_form.html.twig", "C:\\wamp\\www\\MicroCMS\\views\\article_form.html.twig");
    }
}
