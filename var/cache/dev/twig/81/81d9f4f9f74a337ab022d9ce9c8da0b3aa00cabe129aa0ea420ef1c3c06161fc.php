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
        $__internal_41c4a4848ff425c967d03c312572dee769c2b95c1a1afcb895d3a24d48179ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c4a4848ff425c967d03c312572dee769c2b95c1a1afcb895d3a24d48179ee8->enter($__internal_41c4a4848ff425c967d03c312572dee769c2b95c1a1afcb895d3a24d48179ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b3bec25b1459874871da560bbac7a7234412781ebea98f616daa2c96232e1d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bec25b1459874871da560bbac7a7234412781ebea98f616daa2c96232e1d06->enter($__internal_b3bec25b1459874871da560bbac7a7234412781ebea98f616daa2c96232e1d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_41c4a4848ff425c967d03c312572dee769c2b95c1a1afcb895d3a24d48179ee8->leave($__internal_41c4a4848ff425c967d03c312572dee769c2b95c1a1afcb895d3a24d48179ee8_prof);

        
        $__internal_b3bec25b1459874871da560bbac7a7234412781ebea98f616daa2c96232e1d06->leave($__internal_b3bec25b1459874871da560bbac7a7234412781ebea98f616daa2c96232e1d06_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd6b4b0f01f3361008ae7fccd50dfe83be890d4bb713cdaa6cb8b310df4b69ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6b4b0f01f3361008ae7fccd50dfe83be890d4bb713cdaa6cb8b310df4b69ce->enter($__internal_cd6b4b0f01f3361008ae7fccd50dfe83be890d4bb713cdaa6cb8b310df4b69ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c34c7e09277e38a55e01e07163b8abee20c31f64d95fcde10564caf8d62a51c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34c7e09277e38a55e01e07163b8abee20c31f64d95fcde10564caf8d62a51c8->enter($__internal_c34c7e09277e38a55e01e07163b8abee20c31f64d95fcde10564caf8d62a51c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c34c7e09277e38a55e01e07163b8abee20c31f64d95fcde10564caf8d62a51c8->leave($__internal_c34c7e09277e38a55e01e07163b8abee20c31f64d95fcde10564caf8d62a51c8_prof);

        
        $__internal_cd6b4b0f01f3361008ae7fccd50dfe83be890d4bb713cdaa6cb8b310df4b69ce->leave($__internal_cd6b4b0f01f3361008ae7fccd50dfe83be890d4bb713cdaa6cb8b310df4b69ce_prof);

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
