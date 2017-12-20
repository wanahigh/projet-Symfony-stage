<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6dce2451199fe404519bed3393b2233fe5acc37d49585df85b8a438ec26c37f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_006585c6be8398a0f6d63da106f6bef12f9faf7aec30a65cb1631a0723247982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006585c6be8398a0f6d63da106f6bef12f9faf7aec30a65cb1631a0723247982->enter($__internal_006585c6be8398a0f6d63da106f6bef12f9faf7aec30a65cb1631a0723247982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_066ef8c15f1c1706a32bc270fd10cf610945bf55c2536f00ae4ea2b721c863c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066ef8c15f1c1706a32bc270fd10cf610945bf55c2536f00ae4ea2b721c863c5->enter($__internal_066ef8c15f1c1706a32bc270fd10cf610945bf55c2536f00ae4ea2b721c863c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006585c6be8398a0f6d63da106f6bef12f9faf7aec30a65cb1631a0723247982->leave($__internal_006585c6be8398a0f6d63da106f6bef12f9faf7aec30a65cb1631a0723247982_prof);

        
        $__internal_066ef8c15f1c1706a32bc270fd10cf610945bf55c2536f00ae4ea2b721c863c5->leave($__internal_066ef8c15f1c1706a32bc270fd10cf610945bf55c2536f00ae4ea2b721c863c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6478a7f4779dc93b3f8dae9eab54f2632b45b56ad3be85fefcb004d33a7bba08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6478a7f4779dc93b3f8dae9eab54f2632b45b56ad3be85fefcb004d33a7bba08->enter($__internal_6478a7f4779dc93b3f8dae9eab54f2632b45b56ad3be85fefcb004d33a7bba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06679009d6002b8372aaae1c0d1120924001a52a8acf2021a69b12441a89275f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06679009d6002b8372aaae1c0d1120924001a52a8acf2021a69b12441a89275f->enter($__internal_06679009d6002b8372aaae1c0d1120924001a52a8acf2021a69b12441a89275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_06679009d6002b8372aaae1c0d1120924001a52a8acf2021a69b12441a89275f->leave($__internal_06679009d6002b8372aaae1c0d1120924001a52a8acf2021a69b12441a89275f_prof);

        
        $__internal_6478a7f4779dc93b3f8dae9eab54f2632b45b56ad3be85fefcb004d33a7bba08->leave($__internal_6478a7f4779dc93b3f8dae9eab54f2632b45b56ad3be85fefcb004d33a7bba08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
