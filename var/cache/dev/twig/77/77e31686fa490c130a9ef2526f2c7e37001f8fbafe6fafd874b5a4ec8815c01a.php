<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_09c13ae6ef47ff1fbe969c5cd84e5924ca8447338007c194a3b1ed0df609329d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dcda56a78e603a46971c91d557a06441b41242d73b99dfb6ee60d56b2ac6655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcda56a78e603a46971c91d557a06441b41242d73b99dfb6ee60d56b2ac6655->enter($__internal_5dcda56a78e603a46971c91d557a06441b41242d73b99dfb6ee60d56b2ac6655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_737f7a0716ed9658323c17f4d8e071d54c9e0827846efb6bdf7627c10358af53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737f7a0716ed9658323c17f4d8e071d54c9e0827846efb6bdf7627c10358af53->enter($__internal_737f7a0716ed9658323c17f4d8e071d54c9e0827846efb6bdf7627c10358af53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5dcda56a78e603a46971c91d557a06441b41242d73b99dfb6ee60d56b2ac6655->leave($__internal_5dcda56a78e603a46971c91d557a06441b41242d73b99dfb6ee60d56b2ac6655_prof);

        
        $__internal_737f7a0716ed9658323c17f4d8e071d54c9e0827846efb6bdf7627c10358af53->leave($__internal_737f7a0716ed9658323c17f4d8e071d54c9e0827846efb6bdf7627c10358af53_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
