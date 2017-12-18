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
        $__internal_c68cb45f3ad3501a5a09710a0c2bbbc56ba3193ecda4b67a6d588b7f56942dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68cb45f3ad3501a5a09710a0c2bbbc56ba3193ecda4b67a6d588b7f56942dca->enter($__internal_c68cb45f3ad3501a5a09710a0c2bbbc56ba3193ecda4b67a6d588b7f56942dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ba6a259bdb4eac60f707ad27ca1e52d55259e6768048c7bcf011b1ea4b22240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6a259bdb4eac60f707ad27ca1e52d55259e6768048c7bcf011b1ea4b22240c->enter($__internal_ba6a259bdb4eac60f707ad27ca1e52d55259e6768048c7bcf011b1ea4b22240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68cb45f3ad3501a5a09710a0c2bbbc56ba3193ecda4b67a6d588b7f56942dca->leave($__internal_c68cb45f3ad3501a5a09710a0c2bbbc56ba3193ecda4b67a6d588b7f56942dca_prof);

        
        $__internal_ba6a259bdb4eac60f707ad27ca1e52d55259e6768048c7bcf011b1ea4b22240c->leave($__internal_ba6a259bdb4eac60f707ad27ca1e52d55259e6768048c7bcf011b1ea4b22240c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9831904853e5d3228c492d38b112348619dc2822c058ee26e798207c584fda6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9831904853e5d3228c492d38b112348619dc2822c058ee26e798207c584fda6b->enter($__internal_9831904853e5d3228c492d38b112348619dc2822c058ee26e798207c584fda6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_72f1a6716f2e127edaace4718ccb5e0eb39a9d4adf6ac22e247cf487cf8557e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f1a6716f2e127edaace4718ccb5e0eb39a9d4adf6ac22e247cf487cf8557e2->enter($__internal_72f1a6716f2e127edaace4718ccb5e0eb39a9d4adf6ac22e247cf487cf8557e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_72f1a6716f2e127edaace4718ccb5e0eb39a9d4adf6ac22e247cf487cf8557e2->leave($__internal_72f1a6716f2e127edaace4718ccb5e0eb39a9d4adf6ac22e247cf487cf8557e2_prof);

        
        $__internal_9831904853e5d3228c492d38b112348619dc2822c058ee26e798207c584fda6b->leave($__internal_9831904853e5d3228c492d38b112348619dc2822c058ee26e798207c584fda6b_prof);

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
