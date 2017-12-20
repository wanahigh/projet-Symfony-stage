<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9cc43f585a1e9067e67e897c62b50d940ef379e9370ca7d145604b58ad8fadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cc43f585a1e9067e67e897c62b50d940ef379e9370ca7d145604b58ad8fadc->enter($__internal_e9cc43f585a1e9067e67e897c62b50d940ef379e9370ca7d145604b58ad8fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_15e20977f41f217698dbcb9577101ddf18f3bbfdb1a819c18dd45f144b43132b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e20977f41f217698dbcb9577101ddf18f3bbfdb1a819c18dd45f144b43132b->enter($__internal_15e20977f41f217698dbcb9577101ddf18f3bbfdb1a819c18dd45f144b43132b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9cc43f585a1e9067e67e897c62b50d940ef379e9370ca7d145604b58ad8fadc->leave($__internal_e9cc43f585a1e9067e67e897c62b50d940ef379e9370ca7d145604b58ad8fadc_prof);

        
        $__internal_15e20977f41f217698dbcb9577101ddf18f3bbfdb1a819c18dd45f144b43132b->leave($__internal_15e20977f41f217698dbcb9577101ddf18f3bbfdb1a819c18dd45f144b43132b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14e9897d72611187919d24a7987318128d0cc2aa0d62f90a4598d932b24c3e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e9897d72611187919d24a7987318128d0cc2aa0d62f90a4598d932b24c3e0f->enter($__internal_14e9897d72611187919d24a7987318128d0cc2aa0d62f90a4598d932b24c3e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3750b274bf5f5f48a2e124af7e91a989a254b2c4b3b4853943f5b57dd81d5898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3750b274bf5f5f48a2e124af7e91a989a254b2c4b3b4853943f5b57dd81d5898->enter($__internal_3750b274bf5f5f48a2e124af7e91a989a254b2c4b3b4853943f5b57dd81d5898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_3750b274bf5f5f48a2e124af7e91a989a254b2c4b3b4853943f5b57dd81d5898->leave($__internal_3750b274bf5f5f48a2e124af7e91a989a254b2c4b3b4853943f5b57dd81d5898_prof);

        
        $__internal_14e9897d72611187919d24a7987318128d0cc2aa0d62f90a4598d932b24c3e0f->leave($__internal_14e9897d72611187919d24a7987318128d0cc2aa0d62f90a4598d932b24c3e0f_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de1a52b51c11cb9d720abb15f4ddd1ec3f2d5237d6ca31e3eceacb791b7137bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1a52b51c11cb9d720abb15f4ddd1ec3f2d5237d6ca31e3eceacb791b7137bc->enter($__internal_de1a52b51c11cb9d720abb15f4ddd1ec3f2d5237d6ca31e3eceacb791b7137bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dddef8490caff32a305726a5264aeb61736837305a11070d59f5f589519ae4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddef8490caff32a305726a5264aeb61736837305a11070d59f5f589519ae4dd->enter($__internal_dddef8490caff32a305726a5264aeb61736837305a11070d59f5f589519ae4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_dddef8490caff32a305726a5264aeb61736837305a11070d59f5f589519ae4dd->leave($__internal_dddef8490caff32a305726a5264aeb61736837305a11070d59f5f589519ae4dd_prof);

        
        $__internal_de1a52b51c11cb9d720abb15f4ddd1ec3f2d5237d6ca31e3eceacb791b7137bc->leave($__internal_de1a52b51c11cb9d720abb15f4ddd1ec3f2d5237d6ca31e3eceacb791b7137bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
