<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_eb1da0f076682bbcf18314a3665f7a64649a0fa1ec8114c8cd0e8246e96168d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_5fde0df895db5e4f7ce22fce216e9011a80eb77571bea3af1035214d88b691e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fde0df895db5e4f7ce22fce216e9011a80eb77571bea3af1035214d88b691e1->enter($__internal_5fde0df895db5e4f7ce22fce216e9011a80eb77571bea3af1035214d88b691e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_abf1e0e0a299b06a459f36cd2f2c5a9b40920e21f296072dc7adeeedc49378c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf1e0e0a299b06a459f36cd2f2c5a9b40920e21f296072dc7adeeedc49378c8->enter($__internal_abf1e0e0a299b06a459f36cd2f2c5a9b40920e21f296072dc7adeeedc49378c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fde0df895db5e4f7ce22fce216e9011a80eb77571bea3af1035214d88b691e1->leave($__internal_5fde0df895db5e4f7ce22fce216e9011a80eb77571bea3af1035214d88b691e1_prof);

        
        $__internal_abf1e0e0a299b06a459f36cd2f2c5a9b40920e21f296072dc7adeeedc49378c8->leave($__internal_abf1e0e0a299b06a459f36cd2f2c5a9b40920e21f296072dc7adeeedc49378c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eee50539f3835f9fd827ff784d7af32ca65d544a990dc61db1ea0f3e4ec3f396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee50539f3835f9fd827ff784d7af32ca65d544a990dc61db1ea0f3e4ec3f396->enter($__internal_eee50539f3835f9fd827ff784d7af32ca65d544a990dc61db1ea0f3e4ec3f396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb178d893936fd0495235f0cf2fdecae4514840f6197dc64a61c1c101bd76ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb178d893936fd0495235f0cf2fdecae4514840f6197dc64a61c1c101bd76ea2->enter($__internal_bb178d893936fd0495235f0cf2fdecae4514840f6197dc64a61c1c101bd76ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_bb178d893936fd0495235f0cf2fdecae4514840f6197dc64a61c1c101bd76ea2->leave($__internal_bb178d893936fd0495235f0cf2fdecae4514840f6197dc64a61c1c101bd76ea2_prof);

        
        $__internal_eee50539f3835f9fd827ff784d7af32ca65d544a990dc61db1ea0f3e4ec3f396->leave($__internal_eee50539f3835f9fd827ff784d7af32ca65d544a990dc61db1ea0f3e4ec3f396_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
