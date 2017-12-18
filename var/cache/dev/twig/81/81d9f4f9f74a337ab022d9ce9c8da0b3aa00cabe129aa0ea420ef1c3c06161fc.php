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
        $__internal_dd239b3127a2d637127e3e60f7fe983df95cb2b93e273d3c414db79d72d22bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd239b3127a2d637127e3e60f7fe983df95cb2b93e273d3c414db79d72d22bd6->enter($__internal_dd239b3127a2d637127e3e60f7fe983df95cb2b93e273d3c414db79d72d22bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a57cdebb5a1fee6c267dc1214250541a550604d491f83e12d9aace0c9c981c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57cdebb5a1fee6c267dc1214250541a550604d491f83e12d9aace0c9c981c3a->enter($__internal_a57cdebb5a1fee6c267dc1214250541a550604d491f83e12d9aace0c9c981c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dd239b3127a2d637127e3e60f7fe983df95cb2b93e273d3c414db79d72d22bd6->leave($__internal_dd239b3127a2d637127e3e60f7fe983df95cb2b93e273d3c414db79d72d22bd6_prof);

        
        $__internal_a57cdebb5a1fee6c267dc1214250541a550604d491f83e12d9aace0c9c981c3a->leave($__internal_a57cdebb5a1fee6c267dc1214250541a550604d491f83e12d9aace0c9c981c3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd312e881cdf9dbefdb9a7a92ae4a310f17e91771625f6871b74313112d9c135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd312e881cdf9dbefdb9a7a92ae4a310f17e91771625f6871b74313112d9c135->enter($__internal_dd312e881cdf9dbefdb9a7a92ae4a310f17e91771625f6871b74313112d9c135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fcc9d82826ee1673fd8090f04de32169789940b1b22eef6f5f6694676708e3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc9d82826ee1673fd8090f04de32169789940b1b22eef6f5f6694676708e3b7->enter($__internal_fcc9d82826ee1673fd8090f04de32169789940b1b22eef6f5f6694676708e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fcc9d82826ee1673fd8090f04de32169789940b1b22eef6f5f6694676708e3b7->leave($__internal_fcc9d82826ee1673fd8090f04de32169789940b1b22eef6f5f6694676708e3b7_prof);

        
        $__internal_dd312e881cdf9dbefdb9a7a92ae4a310f17e91771625f6871b74313112d9c135->leave($__internal_dd312e881cdf9dbefdb9a7a92ae4a310f17e91771625f6871b74313112d9c135_prof);

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
