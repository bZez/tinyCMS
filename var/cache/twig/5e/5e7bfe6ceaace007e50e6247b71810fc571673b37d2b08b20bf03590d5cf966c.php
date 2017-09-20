<?php

/* index.html.twig */
class __TwigTemplate_affeb767cc2a1afd06d711364e84e2a7e0998ab3b7ae11ee76ef81252a4c8243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'splash' => array($this, 'block_splash'),
            'content' => array($this, 'block_content'),
            'contact' => array($this, 'block_contact'),
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
        echo "Home";
    }

    // line 4
    public function block_splash($context, array $blocks = array())
    {
        // line 5
        echo "<section id=\"splash\">
<div id=\"splashTxt\">
<p>welcome to</p><br/>
<p>my<i>tiny</i>cms</p><br/>
<p>made with <i>❤</i> by bzez</p>
</div>
</section>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<section>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 16
            echo "<article class=\"col-md-3\">
    <h2><a class=\"articleTitle\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h2>
    <p>";
            // line 18
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["article"], "content", array()), 0, 500) . " ..."), "html", null, true);
            echo "</p>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</section>
";
    }

    // line 23
    public function block_contact($context, array $blocks = array())
    {
        // line 24
        echo "        <div class=\"contact-section\">
            <div class=\"container\">
              <h2 id=\"contitle\">Contactez moi</h2>
             <div id=\"viewCont\">
              <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                  <form class=\"form-horizontal\">
                    <div class=\"form-group\">
                      <label for=\"mailername\">Nom</label>
                      <input type=\"text\" class=\"form-control\" id=\"mailername\" placeholder=\"Votre petit nom :)\">
                    </div>
                    <div class=\"form-group\">
                      <label for=\"mailermail\">Email</label>
                      <input type=\"email\" class=\"form-control\" id=\"mailermail\" placeholder=\"votre@email.com\">
                    </div>
                    <div class=\"form-group \">
                      <label for=\"mailermsg\">Message</label>
                     <textarea id=\"msgarea\" class=\"form-control\" placeholder=\"Votre message...\"></textarea> 
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Envoyer !</button>
                  </form>
</div></div></div>
                    <h3 id=\"socialtxt\">Socials</h3>
                    <div id=\"viewSocial\">
                  <ul class=\"list-inline banner-social-buttons\">
                    <li><a href=\"#\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter\"> <span class=\"network-name\"><object class=\"logo\" data=\"https://image.flaticon.com/icons/svg/23/23931.svg\" width=\"40\" height=\"40\"  type=\"image/svg+xml\"></object></span></i></a></li>
                    <li><a href=\"#\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-facebook\"> <span class=\"network-name\"><object class=\"logo\" data=\"https://image.flaticon.com/icons/svg/23/23957.svg\" width=\"40\" height=\"40\"  type=\"image/svg+xml\"></object></span></i></a></li>
                    <li><a href=\"#\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-youtube-play\"> <span class=\"network-name\"><object class=\"logo\" data=\"https://image.flaticon.com/icons/svg/61/61109.svg\" width=\"40\" height=\"40\"  type=\"image/svg+xml\"></object></span></i></a></li>
                  </ul>
                  </div>

              </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  84 => 23,  79 => 21,  70 => 18,  64 => 17,  61 => 16,  57 => 15,  54 => 14,  51 => 13,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\wamp\\www\\MicroCMS\\views\\index.html.twig");
    }
}
