<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c3b43d1aba072198af01ccd2a91fb5771e88544083c5ecab79d8949b63a92f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5fa1d8fd87fd2ad17ceb528d61200a603e84d3eb118b7d134b9ee16824c992cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa1d8fd87fd2ad17ceb528d61200a603e84d3eb118b7d134b9ee16824c992cc->enter($__internal_5fa1d8fd87fd2ad17ceb528d61200a603e84d3eb118b7d134b9ee16824c992cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5bfafa6de3611afc8bcbfa2b6188946be0f38f63b669f5d1c0d70bcfed09cefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfafa6de3611afc8bcbfa2b6188946be0f38f63b669f5d1c0d70bcfed09cefc->enter($__internal_5bfafa6de3611afc8bcbfa2b6188946be0f38f63b669f5d1c0d70bcfed09cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fa1d8fd87fd2ad17ceb528d61200a603e84d3eb118b7d134b9ee16824c992cc->leave($__internal_5fa1d8fd87fd2ad17ceb528d61200a603e84d3eb118b7d134b9ee16824c992cc_prof);

        
        $__internal_5bfafa6de3611afc8bcbfa2b6188946be0f38f63b669f5d1c0d70bcfed09cefc->leave($__internal_5bfafa6de3611afc8bcbfa2b6188946be0f38f63b669f5d1c0d70bcfed09cefc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebbde625f31e53146fd1dd5adb946a0727dbb0bd99045812a1698df9b66a2f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbde625f31e53146fd1dd5adb946a0727dbb0bd99045812a1698df9b66a2f9e->enter($__internal_ebbde625f31e53146fd1dd5adb946a0727dbb0bd99045812a1698df9b66a2f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6a9fee00ed6ec3abbed41c1393d08c7d065ae654f2b0dec3b0d37c1771a08f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9fee00ed6ec3abbed41c1393d08c7d065ae654f2b0dec3b0d37c1771a08f26->enter($__internal_6a9fee00ed6ec3abbed41c1393d08c7d065ae654f2b0dec3b0d37c1771a08f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6a9fee00ed6ec3abbed41c1393d08c7d065ae654f2b0dec3b0d37c1771a08f26->leave($__internal_6a9fee00ed6ec3abbed41c1393d08c7d065ae654f2b0dec3b0d37c1771a08f26_prof);

        
        $__internal_ebbde625f31e53146fd1dd5adb946a0727dbb0bd99045812a1698df9b66a2f9e->leave($__internal_ebbde625f31e53146fd1dd5adb946a0727dbb0bd99045812a1698df9b66a2f9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
