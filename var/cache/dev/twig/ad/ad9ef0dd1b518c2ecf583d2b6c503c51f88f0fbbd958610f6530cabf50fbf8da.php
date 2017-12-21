<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6dce2451199fe404519bed3393b2233fe5acc37d49585df85b8a438ec26c37f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_9557331c626e6f59df32a346f20ac3ff7677e451814bbe23a4151f0bbb0c3119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9557331c626e6f59df32a346f20ac3ff7677e451814bbe23a4151f0bbb0c3119->enter($__internal_9557331c626e6f59df32a346f20ac3ff7677e451814bbe23a4151f0bbb0c3119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_5b5cfa16f518511fe0f2e9e998d98dd55276b743985dd9b19e440117624bd022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5cfa16f518511fe0f2e9e998d98dd55276b743985dd9b19e440117624bd022->enter($__internal_5b5cfa16f518511fe0f2e9e998d98dd55276b743985dd9b19e440117624bd022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9557331c626e6f59df32a346f20ac3ff7677e451814bbe23a4151f0bbb0c3119->leave($__internal_9557331c626e6f59df32a346f20ac3ff7677e451814bbe23a4151f0bbb0c3119_prof);

        
        $__internal_5b5cfa16f518511fe0f2e9e998d98dd55276b743985dd9b19e440117624bd022->leave($__internal_5b5cfa16f518511fe0f2e9e998d98dd55276b743985dd9b19e440117624bd022_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7e73289370c1a5df608fc6c9b5c4bbd12f5f7fe68d99ff3d440c9daf50ce57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e73289370c1a5df608fc6c9b5c4bbd12f5f7fe68d99ff3d440c9daf50ce57b->enter($__internal_b7e73289370c1a5df608fc6c9b5c4bbd12f5f7fe68d99ff3d440c9daf50ce57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fef04036440d0ede1913e3b6f7081bfe4ea45e209f375cb579d8659c616c3a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef04036440d0ede1913e3b6f7081bfe4ea45e209f375cb579d8659c616c3a9c->enter($__internal_fef04036440d0ede1913e3b6f7081bfe4ea45e209f375cb579d8659c616c3a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fef04036440d0ede1913e3b6f7081bfe4ea45e209f375cb579d8659c616c3a9c->leave($__internal_fef04036440d0ede1913e3b6f7081bfe4ea45e209f375cb579d8659c616c3a9c_prof);

        
        $__internal_b7e73289370c1a5df608fc6c9b5c4bbd12f5f7fe68d99ff3d440c9daf50ce57b->leave($__internal_b7e73289370c1a5df608fc6c9b5c4bbd12f5f7fe68d99ff3d440c9daf50ce57b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
