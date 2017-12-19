<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_570314277667910dffb1e96957baf5d9a0f37cab244601783ae64ab670080741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65770e42c2175bd9428bdf230822498bd1fd5672b077e91752cda6f367abcb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65770e42c2175bd9428bdf230822498bd1fd5672b077e91752cda6f367abcb5->enter($__internal_b65770e42c2175bd9428bdf230822498bd1fd5672b077e91752cda6f367abcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_83d91fd37f4098aa6b892b0e75bfbf16123c033d3a2da99fb7785426a198257e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d91fd37f4098aa6b892b0e75bfbf16123c033d3a2da99fb7785426a198257e->enter($__internal_83d91fd37f4098aa6b892b0e75bfbf16123c033d3a2da99fb7785426a198257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b65770e42c2175bd9428bdf230822498bd1fd5672b077e91752cda6f367abcb5->leave($__internal_b65770e42c2175bd9428bdf230822498bd1fd5672b077e91752cda6f367abcb5_prof);

        
        $__internal_83d91fd37f4098aa6b892b0e75bfbf16123c033d3a2da99fb7785426a198257e->leave($__internal_83d91fd37f4098aa6b892b0e75bfbf16123c033d3a2da99fb7785426a198257e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e09c4cc82b389dd15076f2f1cd28bf89df140be52225f32b167dc7fb76869aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09c4cc82b389dd15076f2f1cd28bf89df140be52225f32b167dc7fb76869aa9->enter($__internal_e09c4cc82b389dd15076f2f1cd28bf89df140be52225f32b167dc7fb76869aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a698cd46cbbd1a386ffb0db458a2ff577d58b7d0529ab965127c7d488b6fb092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a698cd46cbbd1a386ffb0db458a2ff577d58b7d0529ab965127c7d488b6fb092->enter($__internal_a698cd46cbbd1a386ffb0db458a2ff577d58b7d0529ab965127c7d488b6fb092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a698cd46cbbd1a386ffb0db458a2ff577d58b7d0529ab965127c7d488b6fb092->leave($__internal_a698cd46cbbd1a386ffb0db458a2ff577d58b7d0529ab965127c7d488b6fb092_prof);

        
        $__internal_e09c4cc82b389dd15076f2f1cd28bf89df140be52225f32b167dc7fb76869aa9->leave($__internal_e09c4cc82b389dd15076f2f1cd28bf89df140be52225f32b167dc7fb76869aa9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
