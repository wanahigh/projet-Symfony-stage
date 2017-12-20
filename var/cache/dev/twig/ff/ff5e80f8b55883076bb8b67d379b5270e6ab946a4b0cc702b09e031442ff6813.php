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
        $__internal_09ff9009f9cd1cce74a2e957d1ca9b36f122ac2374408337a171a5e0eff344ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ff9009f9cd1cce74a2e957d1ca9b36f122ac2374408337a171a5e0eff344ed->enter($__internal_09ff9009f9cd1cce74a2e957d1ca9b36f122ac2374408337a171a5e0eff344ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_9ca816f4a05eeb37efc3cb9d68f334130edd713baacecd6228f261ba8b6f6ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca816f4a05eeb37efc3cb9d68f334130edd713baacecd6228f261ba8b6f6ce1->enter($__internal_9ca816f4a05eeb37efc3cb9d68f334130edd713baacecd6228f261ba8b6f6ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ff9009f9cd1cce74a2e957d1ca9b36f122ac2374408337a171a5e0eff344ed->leave($__internal_09ff9009f9cd1cce74a2e957d1ca9b36f122ac2374408337a171a5e0eff344ed_prof);

        
        $__internal_9ca816f4a05eeb37efc3cb9d68f334130edd713baacecd6228f261ba8b6f6ce1->leave($__internal_9ca816f4a05eeb37efc3cb9d68f334130edd713baacecd6228f261ba8b6f6ce1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99dc4f538505fc26c7843686cea94287d5d4e86ba40bd5d1ec75fc8e90cdcb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dc4f538505fc26c7843686cea94287d5d4e86ba40bd5d1ec75fc8e90cdcb32->enter($__internal_99dc4f538505fc26c7843686cea94287d5d4e86ba40bd5d1ec75fc8e90cdcb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5aaf49504a28d2be53dc96cb778d88626dcf7f6d5b0aec87fef0dc82657299c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aaf49504a28d2be53dc96cb778d88626dcf7f6d5b0aec87fef0dc82657299c8->enter($__internal_5aaf49504a28d2be53dc96cb778d88626dcf7f6d5b0aec87fef0dc82657299c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5aaf49504a28d2be53dc96cb778d88626dcf7f6d5b0aec87fef0dc82657299c8->leave($__internal_5aaf49504a28d2be53dc96cb778d88626dcf7f6d5b0aec87fef0dc82657299c8_prof);

        
        $__internal_99dc4f538505fc26c7843686cea94287d5d4e86ba40bd5d1ec75fc8e90cdcb32->leave($__internal_99dc4f538505fc26c7843686cea94287d5d4e86ba40bd5d1ec75fc8e90cdcb32_prof);

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
