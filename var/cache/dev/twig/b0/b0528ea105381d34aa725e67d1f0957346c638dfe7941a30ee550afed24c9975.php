<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_019eeb3e51a736717b56cc03b97cae99bda11c283ed327f233c7e6c1e3f533f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7323feca72e01ddce39f71624a3ab0019619447810367e660c3f946e5f13db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7323feca72e01ddce39f71624a3ab0019619447810367e660c3f946e5f13db8->enter($__internal_a7323feca72e01ddce39f71624a3ab0019619447810367e660c3f946e5f13db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5cd8e86bdbf1adfccad2c00113486977b2d17b78ee6f8342947306481a448719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd8e86bdbf1adfccad2c00113486977b2d17b78ee6f8342947306481a448719->enter($__internal_5cd8e86bdbf1adfccad2c00113486977b2d17b78ee6f8342947306481a448719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7323feca72e01ddce39f71624a3ab0019619447810367e660c3f946e5f13db8->leave($__internal_a7323feca72e01ddce39f71624a3ab0019619447810367e660c3f946e5f13db8_prof);

        
        $__internal_5cd8e86bdbf1adfccad2c00113486977b2d17b78ee6f8342947306481a448719->leave($__internal_5cd8e86bdbf1adfccad2c00113486977b2d17b78ee6f8342947306481a448719_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_952b0d76ad70cb309812a454c94c78b9dbbb27501b202dfdeeb60f0af7094782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952b0d76ad70cb309812a454c94c78b9dbbb27501b202dfdeeb60f0af7094782->enter($__internal_952b0d76ad70cb309812a454c94c78b9dbbb27501b202dfdeeb60f0af7094782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7f6b53de421d9d5c98b841b6f53593a0f40ea9b937e0f20774e0e963e075c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f6b53de421d9d5c98b841b6f53593a0f40ea9b937e0f20774e0e963e075c5d->enter($__internal_b7f6b53de421d9d5c98b841b6f53593a0f40ea9b937e0f20774e0e963e075c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b7f6b53de421d9d5c98b841b6f53593a0f40ea9b937e0f20774e0e963e075c5d->leave($__internal_b7f6b53de421d9d5c98b841b6f53593a0f40ea9b937e0f20774e0e963e075c5d_prof);

        
        $__internal_952b0d76ad70cb309812a454c94c78b9dbbb27501b202dfdeeb60f0af7094782->leave($__internal_952b0d76ad70cb309812a454c94c78b9dbbb27501b202dfdeeb60f0af7094782_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
