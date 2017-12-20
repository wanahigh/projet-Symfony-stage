<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_82e1ea99c897434c57d2ee61f9461df57e6c4b3ac52d182d1267cc818b03184c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_9f7da5f752e80a724acb68f48c7864fde31c5f2c8f24ce55ecad015f9f16d5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7da5f752e80a724acb68f48c7864fde31c5f2c8f24ce55ecad015f9f16d5cd->enter($__internal_9f7da5f752e80a724acb68f48c7864fde31c5f2c8f24ce55ecad015f9f16d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6bd75c3e8417b65f9861e7ac1c27642bcc2b1072f82154149f7bd4306e2a6f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd75c3e8417b65f9861e7ac1c27642bcc2b1072f82154149f7bd4306e2a6f07->enter($__internal_6bd75c3e8417b65f9861e7ac1c27642bcc2b1072f82154149f7bd4306e2a6f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7da5f752e80a724acb68f48c7864fde31c5f2c8f24ce55ecad015f9f16d5cd->leave($__internal_9f7da5f752e80a724acb68f48c7864fde31c5f2c8f24ce55ecad015f9f16d5cd_prof);

        
        $__internal_6bd75c3e8417b65f9861e7ac1c27642bcc2b1072f82154149f7bd4306e2a6f07->leave($__internal_6bd75c3e8417b65f9861e7ac1c27642bcc2b1072f82154149f7bd4306e2a6f07_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1f54322356475cb7f89ac6b90666910e3876b22dbe6330876c3fcc2528f9c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f54322356475cb7f89ac6b90666910e3876b22dbe6330876c3fcc2528f9c3c->enter($__internal_d1f54322356475cb7f89ac6b90666910e3876b22dbe6330876c3fcc2528f9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9853b86cfb34df82a9a406fe2cb2564a86ac9a3bc53572801c0c1f086d4c7f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9853b86cfb34df82a9a406fe2cb2564a86ac9a3bc53572801c0c1f086d4c7f97->enter($__internal_9853b86cfb34df82a9a406fe2cb2564a86ac9a3bc53572801c0c1f086d4c7f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9853b86cfb34df82a9a406fe2cb2564a86ac9a3bc53572801c0c1f086d4c7f97->leave($__internal_9853b86cfb34df82a9a406fe2cb2564a86ac9a3bc53572801c0c1f086d4c7f97_prof);

        
        $__internal_d1f54322356475cb7f89ac6b90666910e3876b22dbe6330876c3fcc2528f9c3c->leave($__internal_d1f54322356475cb7f89ac6b90666910e3876b22dbe6330876c3fcc2528f9c3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
