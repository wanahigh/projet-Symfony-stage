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
        $__internal_d56c496eccd7a06ff57c32d5f60bea96537d1edb4250a7cb58fc73e849c74646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56c496eccd7a06ff57c32d5f60bea96537d1edb4250a7cb58fc73e849c74646->enter($__internal_d56c496eccd7a06ff57c32d5f60bea96537d1edb4250a7cb58fc73e849c74646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_35a5a1fe352fe2d3816cba99699e6595e5b0fc2b955fc9dbdedb3a1b46d9639f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a5a1fe352fe2d3816cba99699e6595e5b0fc2b955fc9dbdedb3a1b46d9639f->enter($__internal_35a5a1fe352fe2d3816cba99699e6595e5b0fc2b955fc9dbdedb3a1b46d9639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d56c496eccd7a06ff57c32d5f60bea96537d1edb4250a7cb58fc73e849c74646->leave($__internal_d56c496eccd7a06ff57c32d5f60bea96537d1edb4250a7cb58fc73e849c74646_prof);

        
        $__internal_35a5a1fe352fe2d3816cba99699e6595e5b0fc2b955fc9dbdedb3a1b46d9639f->leave($__internal_35a5a1fe352fe2d3816cba99699e6595e5b0fc2b955fc9dbdedb3a1b46d9639f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ad50f382f428557a2e0d6b1abc13cfcb8284e669978900ae6066587cac0eabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad50f382f428557a2e0d6b1abc13cfcb8284e669978900ae6066587cac0eabb->enter($__internal_7ad50f382f428557a2e0d6b1abc13cfcb8284e669978900ae6066587cac0eabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79188e27633877e4a5e0e2f61e44b12bd0f22d8862ab67e0ecb6b952a7be6343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79188e27633877e4a5e0e2f61e44b12bd0f22d8862ab67e0ecb6b952a7be6343->enter($__internal_79188e27633877e4a5e0e2f61e44b12bd0f22d8862ab67e0ecb6b952a7be6343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_79188e27633877e4a5e0e2f61e44b12bd0f22d8862ab67e0ecb6b952a7be6343->leave($__internal_79188e27633877e4a5e0e2f61e44b12bd0f22d8862ab67e0ecb6b952a7be6343_prof);

        
        $__internal_7ad50f382f428557a2e0d6b1abc13cfcb8284e669978900ae6066587cac0eabb->leave($__internal_7ad50f382f428557a2e0d6b1abc13cfcb8284e669978900ae6066587cac0eabb_prof);

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
