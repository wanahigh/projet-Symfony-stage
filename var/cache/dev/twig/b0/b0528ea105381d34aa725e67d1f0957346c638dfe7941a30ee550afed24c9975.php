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
        $__internal_de99fca7c7bc95070fc94d0b39a26a79c2dc68077b45f6aad3c41129ab5a4775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de99fca7c7bc95070fc94d0b39a26a79c2dc68077b45f6aad3c41129ab5a4775->enter($__internal_de99fca7c7bc95070fc94d0b39a26a79c2dc68077b45f6aad3c41129ab5a4775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_a17597cc5eb557a2067477ac0a4f37c188d61670fcaa2868d38d669ae338c79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17597cc5eb557a2067477ac0a4f37c188d61670fcaa2868d38d669ae338c79a->enter($__internal_a17597cc5eb557a2067477ac0a4f37c188d61670fcaa2868d38d669ae338c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de99fca7c7bc95070fc94d0b39a26a79c2dc68077b45f6aad3c41129ab5a4775->leave($__internal_de99fca7c7bc95070fc94d0b39a26a79c2dc68077b45f6aad3c41129ab5a4775_prof);

        
        $__internal_a17597cc5eb557a2067477ac0a4f37c188d61670fcaa2868d38d669ae338c79a->leave($__internal_a17597cc5eb557a2067477ac0a4f37c188d61670fcaa2868d38d669ae338c79a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5080c4ffc5135112de84553f6babebfebdda4025d5b1c39de7b347ee126e0d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5080c4ffc5135112de84553f6babebfebdda4025d5b1c39de7b347ee126e0d75->enter($__internal_5080c4ffc5135112de84553f6babebfebdda4025d5b1c39de7b347ee126e0d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f7267dfae5e674053453c994ad89ab8d47a5fcbd6754bd2909af404fe179408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7267dfae5e674053453c994ad89ab8d47a5fcbd6754bd2909af404fe179408->enter($__internal_1f7267dfae5e674053453c994ad89ab8d47a5fcbd6754bd2909af404fe179408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1f7267dfae5e674053453c994ad89ab8d47a5fcbd6754bd2909af404fe179408->leave($__internal_1f7267dfae5e674053453c994ad89ab8d47a5fcbd6754bd2909af404fe179408_prof);

        
        $__internal_5080c4ffc5135112de84553f6babebfebdda4025d5b1c39de7b347ee126e0d75->leave($__internal_5080c4ffc5135112de84553f6babebfebdda4025d5b1c39de7b347ee126e0d75_prof);

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
