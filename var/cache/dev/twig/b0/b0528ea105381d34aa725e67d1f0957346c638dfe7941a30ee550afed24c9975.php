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
        $__internal_f5b43570af7d1eb5d3a6c9d5f96e647d0a95ac348ef6fb5be64232b4fb54ed4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b43570af7d1eb5d3a6c9d5f96e647d0a95ac348ef6fb5be64232b4fb54ed4f->enter($__internal_f5b43570af7d1eb5d3a6c9d5f96e647d0a95ac348ef6fb5be64232b4fb54ed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_addea13949f66ea222e3f62e395f88729358d839f7d34e1b03f603758c6f28b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addea13949f66ea222e3f62e395f88729358d839f7d34e1b03f603758c6f28b6->enter($__internal_addea13949f66ea222e3f62e395f88729358d839f7d34e1b03f603758c6f28b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b43570af7d1eb5d3a6c9d5f96e647d0a95ac348ef6fb5be64232b4fb54ed4f->leave($__internal_f5b43570af7d1eb5d3a6c9d5f96e647d0a95ac348ef6fb5be64232b4fb54ed4f_prof);

        
        $__internal_addea13949f66ea222e3f62e395f88729358d839f7d34e1b03f603758c6f28b6->leave($__internal_addea13949f66ea222e3f62e395f88729358d839f7d34e1b03f603758c6f28b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_104f195351ab827b606d2f4c12043d0ccd9a3be0a5f0131e6899d0014fc41281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104f195351ab827b606d2f4c12043d0ccd9a3be0a5f0131e6899d0014fc41281->enter($__internal_104f195351ab827b606d2f4c12043d0ccd9a3be0a5f0131e6899d0014fc41281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc47609ee595c6e54806abbd601be7b4dc873424cb2e8b261ee42c6d2c91f1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc47609ee595c6e54806abbd601be7b4dc873424cb2e8b261ee42c6d2c91f1c2->enter($__internal_fc47609ee595c6e54806abbd601be7b4dc873424cb2e8b261ee42c6d2c91f1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fc47609ee595c6e54806abbd601be7b4dc873424cb2e8b261ee42c6d2c91f1c2->leave($__internal_fc47609ee595c6e54806abbd601be7b4dc873424cb2e8b261ee42c6d2c91f1c2_prof);

        
        $__internal_104f195351ab827b606d2f4c12043d0ccd9a3be0a5f0131e6899d0014fc41281->leave($__internal_104f195351ab827b606d2f4c12043d0ccd9a3be0a5f0131e6899d0014fc41281_prof);

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
