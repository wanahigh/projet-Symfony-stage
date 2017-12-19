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
        $__internal_b7ec857d221ac27a8975f285f841ac3ebfb0641b759c6e7a20e1a6b20cad9ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ec857d221ac27a8975f285f841ac3ebfb0641b759c6e7a20e1a6b20cad9ad1->enter($__internal_b7ec857d221ac27a8975f285f841ac3ebfb0641b759c6e7a20e1a6b20cad9ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_00788110f0303ca80b8510cb17abe6518f0e9f77421d9b570d6e70836c852d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00788110f0303ca80b8510cb17abe6518f0e9f77421d9b570d6e70836c852d7f->enter($__internal_00788110f0303ca80b8510cb17abe6518f0e9f77421d9b570d6e70836c852d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ec857d221ac27a8975f285f841ac3ebfb0641b759c6e7a20e1a6b20cad9ad1->leave($__internal_b7ec857d221ac27a8975f285f841ac3ebfb0641b759c6e7a20e1a6b20cad9ad1_prof);

        
        $__internal_00788110f0303ca80b8510cb17abe6518f0e9f77421d9b570d6e70836c852d7f->leave($__internal_00788110f0303ca80b8510cb17abe6518f0e9f77421d9b570d6e70836c852d7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b8597f31d5079dc2cc8a55579894f780f18626b8670f828275cc11fbf44b7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8597f31d5079dc2cc8a55579894f780f18626b8670f828275cc11fbf44b7d9->enter($__internal_7b8597f31d5079dc2cc8a55579894f780f18626b8670f828275cc11fbf44b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66e9caa1ff1c6a86645e7c30bbe064562f4aaf9337c608107b557262ace6583e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e9caa1ff1c6a86645e7c30bbe064562f4aaf9337c608107b557262ace6583e->enter($__internal_66e9caa1ff1c6a86645e7c30bbe064562f4aaf9337c608107b557262ace6583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_66e9caa1ff1c6a86645e7c30bbe064562f4aaf9337c608107b557262ace6583e->leave($__internal_66e9caa1ff1c6a86645e7c30bbe064562f4aaf9337c608107b557262ace6583e_prof);

        
        $__internal_7b8597f31d5079dc2cc8a55579894f780f18626b8670f828275cc11fbf44b7d9->leave($__internal_7b8597f31d5079dc2cc8a55579894f780f18626b8670f828275cc11fbf44b7d9_prof);

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
