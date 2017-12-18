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
        $__internal_e93db2a2fd4d30a22db7bec78ee58e9636088778891e7c89066c51a8dedc5bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93db2a2fd4d30a22db7bec78ee58e9636088778891e7c89066c51a8dedc5bea->enter($__internal_e93db2a2fd4d30a22db7bec78ee58e9636088778891e7c89066c51a8dedc5bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_94751eeae83359d3d850f8a8b977c745fca5ee639ce81691a43c3224b41a91fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94751eeae83359d3d850f8a8b977c745fca5ee639ce81691a43c3224b41a91fd->enter($__internal_94751eeae83359d3d850f8a8b977c745fca5ee639ce81691a43c3224b41a91fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_e93db2a2fd4d30a22db7bec78ee58e9636088778891e7c89066c51a8dedc5bea->leave($__internal_e93db2a2fd4d30a22db7bec78ee58e9636088778891e7c89066c51a8dedc5bea_prof);

        
        $__internal_94751eeae83359d3d850f8a8b977c745fca5ee639ce81691a43c3224b41a91fd->leave($__internal_94751eeae83359d3d850f8a8b977c745fca5ee639ce81691a43c3224b41a91fd_prof);

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
