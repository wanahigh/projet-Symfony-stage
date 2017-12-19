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
        $__internal_cec1d12095cd2896020d5e92f8188616f4c66573db020774c5c3a5ccddff1a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec1d12095cd2896020d5e92f8188616f4c66573db020774c5c3a5ccddff1a0b->enter($__internal_cec1d12095cd2896020d5e92f8188616f4c66573db020774c5c3a5ccddff1a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_372c9b6b495997e3d23160782320f6935d261f437d26ac5cb2680c815e8f66df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372c9b6b495997e3d23160782320f6935d261f437d26ac5cb2680c815e8f66df->enter($__internal_372c9b6b495997e3d23160782320f6935d261f437d26ac5cb2680c815e8f66df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_cec1d12095cd2896020d5e92f8188616f4c66573db020774c5c3a5ccddff1a0b->leave($__internal_cec1d12095cd2896020d5e92f8188616f4c66573db020774c5c3a5ccddff1a0b_prof);

        
        $__internal_372c9b6b495997e3d23160782320f6935d261f437d26ac5cb2680c815e8f66df->leave($__internal_372c9b6b495997e3d23160782320f6935d261f437d26ac5cb2680c815e8f66df_prof);

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
