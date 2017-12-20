<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fda484434dcbd297f396af250d5eca64ea508bdc204290dd81fa0bfd2c51a207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_53af01f5639974f44a12565bffbf954b609816dfc2e20e1de2505c7741ee4b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53af01f5639974f44a12565bffbf954b609816dfc2e20e1de2505c7741ee4b03->enter($__internal_53af01f5639974f44a12565bffbf954b609816dfc2e20e1de2505c7741ee4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_68fe96b25a8b41e40cb9f68bf12b23e3821a1ccf58bdff413fe654052c7435d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fe96b25a8b41e40cb9f68bf12b23e3821a1ccf58bdff413fe654052c7435d1->enter($__internal_68fe96b25a8b41e40cb9f68bf12b23e3821a1ccf58bdff413fe654052c7435d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53af01f5639974f44a12565bffbf954b609816dfc2e20e1de2505c7741ee4b03->leave($__internal_53af01f5639974f44a12565bffbf954b609816dfc2e20e1de2505c7741ee4b03_prof);

        
        $__internal_68fe96b25a8b41e40cb9f68bf12b23e3821a1ccf58bdff413fe654052c7435d1->leave($__internal_68fe96b25a8b41e40cb9f68bf12b23e3821a1ccf58bdff413fe654052c7435d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb557192e3bfdb8832992fd6aba4676d0f7a42de49a15d817021b40219307652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb557192e3bfdb8832992fd6aba4676d0f7a42de49a15d817021b40219307652->enter($__internal_bb557192e3bfdb8832992fd6aba4676d0f7a42de49a15d817021b40219307652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6212eed09c30c0611e4a8db030140c28e365f2ae136bb7ec14b076cf20f5b26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6212eed09c30c0611e4a8db030140c28e365f2ae136bb7ec14b076cf20f5b26f->enter($__internal_6212eed09c30c0611e4a8db030140c28e365f2ae136bb7ec14b076cf20f5b26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6212eed09c30c0611e4a8db030140c28e365f2ae136bb7ec14b076cf20f5b26f->leave($__internal_6212eed09c30c0611e4a8db030140c28e365f2ae136bb7ec14b076cf20f5b26f_prof);

        
        $__internal_bb557192e3bfdb8832992fd6aba4676d0f7a42de49a15d817021b40219307652->leave($__internal_bb557192e3bfdb8832992fd6aba4676d0f7a42de49a15d817021b40219307652_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
