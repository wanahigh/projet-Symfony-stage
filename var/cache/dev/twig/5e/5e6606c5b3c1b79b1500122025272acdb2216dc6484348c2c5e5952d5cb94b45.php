<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d9ec4fbf45c4fa33454caacd09978d4775285446bbe83ee326b4d409c9067741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9b7bd793e1d25933dafff06a18ff74645c7951c315780c1149ef797f7d778da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7bd793e1d25933dafff06a18ff74645c7951c315780c1149ef797f7d778da8->enter($__internal_9b7bd793e1d25933dafff06a18ff74645c7951c315780c1149ef797f7d778da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_769bc75d44d840339aee81839d0c26396035ca64b389c39d2a99345a7a2812ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769bc75d44d840339aee81839d0c26396035ca64b389c39d2a99345a7a2812ed->enter($__internal_769bc75d44d840339aee81839d0c26396035ca64b389c39d2a99345a7a2812ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7bd793e1d25933dafff06a18ff74645c7951c315780c1149ef797f7d778da8->leave($__internal_9b7bd793e1d25933dafff06a18ff74645c7951c315780c1149ef797f7d778da8_prof);

        
        $__internal_769bc75d44d840339aee81839d0c26396035ca64b389c39d2a99345a7a2812ed->leave($__internal_769bc75d44d840339aee81839d0c26396035ca64b389c39d2a99345a7a2812ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e64df1f5dbc2977799e4d0ae8d970e3232e1732109dc82cce85cad3b9bdb1d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64df1f5dbc2977799e4d0ae8d970e3232e1732109dc82cce85cad3b9bdb1d95->enter($__internal_e64df1f5dbc2977799e4d0ae8d970e3232e1732109dc82cce85cad3b9bdb1d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_945234c3542eba98da06e836e6fa8899ce290535f97c6dca62d0364bd9d237cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945234c3542eba98da06e836e6fa8899ce290535f97c6dca62d0364bd9d237cb->enter($__internal_945234c3542eba98da06e836e6fa8899ce290535f97c6dca62d0364bd9d237cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_945234c3542eba98da06e836e6fa8899ce290535f97c6dca62d0364bd9d237cb->leave($__internal_945234c3542eba98da06e836e6fa8899ce290535f97c6dca62d0364bd9d237cb_prof);

        
        $__internal_e64df1f5dbc2977799e4d0ae8d970e3232e1732109dc82cce85cad3b9bdb1d95->leave($__internal_e64df1f5dbc2977799e4d0ae8d970e3232e1732109dc82cce85cad3b9bdb1d95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
