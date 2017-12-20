<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a0f97147cb14d2cbbd6138777e25a3f858365bfc317b359a1e52fa594aa324e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b042c65c397450b39e38047a877c01fe1bf85ecc0bc79898267c48a22bafa4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b042c65c397450b39e38047a877c01fe1bf85ecc0bc79898267c48a22bafa4d0->enter($__internal_b042c65c397450b39e38047a877c01fe1bf85ecc0bc79898267c48a22bafa4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5757a204863bf5e0a36d406f79b0b5ffe2b797ccf4b75c9648e1b5f48b0122c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5757a204863bf5e0a36d406f79b0b5ffe2b797ccf4b75c9648e1b5f48b0122c8->enter($__internal_5757a204863bf5e0a36d406f79b0b5ffe2b797ccf4b75c9648e1b5f48b0122c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b042c65c397450b39e38047a877c01fe1bf85ecc0bc79898267c48a22bafa4d0->leave($__internal_b042c65c397450b39e38047a877c01fe1bf85ecc0bc79898267c48a22bafa4d0_prof);

        
        $__internal_5757a204863bf5e0a36d406f79b0b5ffe2b797ccf4b75c9648e1b5f48b0122c8->leave($__internal_5757a204863bf5e0a36d406f79b0b5ffe2b797ccf4b75c9648e1b5f48b0122c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a82957d9f948d27a6d46c1aee2c0b8502dc7803b1e7ab54409f6f0997412bd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82957d9f948d27a6d46c1aee2c0b8502dc7803b1e7ab54409f6f0997412bd79->enter($__internal_a82957d9f948d27a6d46c1aee2c0b8502dc7803b1e7ab54409f6f0997412bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0377d55a3898674fa80125da4726f512408d37bcf64b4b78de28045dba7c675c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0377d55a3898674fa80125da4726f512408d37bcf64b4b78de28045dba7c675c->enter($__internal_0377d55a3898674fa80125da4726f512408d37bcf64b4b78de28045dba7c675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0377d55a3898674fa80125da4726f512408d37bcf64b4b78de28045dba7c675c->leave($__internal_0377d55a3898674fa80125da4726f512408d37bcf64b4b78de28045dba7c675c_prof);

        
        $__internal_a82957d9f948d27a6d46c1aee2c0b8502dc7803b1e7ab54409f6f0997412bd79->leave($__internal_a82957d9f948d27a6d46c1aee2c0b8502dc7803b1e7ab54409f6f0997412bd79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
