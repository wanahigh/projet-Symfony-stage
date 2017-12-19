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
        $__internal_e2fb50d9a9b3ccd22e931578c29f00efeb1ca1c747bac765c2089291d42fd03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fb50d9a9b3ccd22e931578c29f00efeb1ca1c747bac765c2089291d42fd03c->enter($__internal_e2fb50d9a9b3ccd22e931578c29f00efeb1ca1c747bac765c2089291d42fd03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1eb0eac62405cf5d0fe8c03f0996e832c3b73aeaf3493ca93d424e06873037b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb0eac62405cf5d0fe8c03f0996e832c3b73aeaf3493ca93d424e06873037b8->enter($__internal_1eb0eac62405cf5d0fe8c03f0996e832c3b73aeaf3493ca93d424e06873037b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e2fb50d9a9b3ccd22e931578c29f00efeb1ca1c747bac765c2089291d42fd03c->leave($__internal_e2fb50d9a9b3ccd22e931578c29f00efeb1ca1c747bac765c2089291d42fd03c_prof);

        
        $__internal_1eb0eac62405cf5d0fe8c03f0996e832c3b73aeaf3493ca93d424e06873037b8->leave($__internal_1eb0eac62405cf5d0fe8c03f0996e832c3b73aeaf3493ca93d424e06873037b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9857422f9674b94eeb2fec6335fc19a99ba582bec9a427e0491668c12f2b0675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9857422f9674b94eeb2fec6335fc19a99ba582bec9a427e0491668c12f2b0675->enter($__internal_9857422f9674b94eeb2fec6335fc19a99ba582bec9a427e0491668c12f2b0675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab433f2b824cd73a0f891f688a668047a4925359280ef1226af055c5c6c8a5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab433f2b824cd73a0f891f688a668047a4925359280ef1226af055c5c6c8a5f6->enter($__internal_ab433f2b824cd73a0f891f688a668047a4925359280ef1226af055c5c6c8a5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab433f2b824cd73a0f891f688a668047a4925359280ef1226af055c5c6c8a5f6->leave($__internal_ab433f2b824cd73a0f891f688a668047a4925359280ef1226af055c5c6c8a5f6_prof);

        
        $__internal_9857422f9674b94eeb2fec6335fc19a99ba582bec9a427e0491668c12f2b0675->leave($__internal_9857422f9674b94eeb2fec6335fc19a99ba582bec9a427e0491668c12f2b0675_prof);

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
