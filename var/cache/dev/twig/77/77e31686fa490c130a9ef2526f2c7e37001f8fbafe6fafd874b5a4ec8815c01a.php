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
        $__internal_6ecd178a438b59f0697dd60233e0939184142a3a6e6929db418641dd5a546325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecd178a438b59f0697dd60233e0939184142a3a6e6929db418641dd5a546325->enter($__internal_6ecd178a438b59f0697dd60233e0939184142a3a6e6929db418641dd5a546325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_4ad3e990746d769eac77618feb7c76bbd8fd0844509f8fb6623f18cd0d3407c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad3e990746d769eac77618feb7c76bbd8fd0844509f8fb6623f18cd0d3407c8->enter($__internal_4ad3e990746d769eac77618feb7c76bbd8fd0844509f8fb6623f18cd0d3407c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_6ecd178a438b59f0697dd60233e0939184142a3a6e6929db418641dd5a546325->leave($__internal_6ecd178a438b59f0697dd60233e0939184142a3a6e6929db418641dd5a546325_prof);

        
        $__internal_4ad3e990746d769eac77618feb7c76bbd8fd0844509f8fb6623f18cd0d3407c8->leave($__internal_4ad3e990746d769eac77618feb7c76bbd8fd0844509f8fb6623f18cd0d3407c8_prof);

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
