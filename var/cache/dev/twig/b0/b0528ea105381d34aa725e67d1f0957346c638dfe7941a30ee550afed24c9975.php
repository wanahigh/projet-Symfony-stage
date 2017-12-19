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
        $__internal_3f55072a6df54ed7944c6519a841403867ca42321b90be6b72007def2067fdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f55072a6df54ed7944c6519a841403867ca42321b90be6b72007def2067fdad->enter($__internal_3f55072a6df54ed7944c6519a841403867ca42321b90be6b72007def2067fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f29e3b2f5547bb666fc4ac4717eef6cb2ebdfb0fc7b37b8011c1ffd23dcf8680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29e3b2f5547bb666fc4ac4717eef6cb2ebdfb0fc7b37b8011c1ffd23dcf8680->enter($__internal_f29e3b2f5547bb666fc4ac4717eef6cb2ebdfb0fc7b37b8011c1ffd23dcf8680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f55072a6df54ed7944c6519a841403867ca42321b90be6b72007def2067fdad->leave($__internal_3f55072a6df54ed7944c6519a841403867ca42321b90be6b72007def2067fdad_prof);

        
        $__internal_f29e3b2f5547bb666fc4ac4717eef6cb2ebdfb0fc7b37b8011c1ffd23dcf8680->leave($__internal_f29e3b2f5547bb666fc4ac4717eef6cb2ebdfb0fc7b37b8011c1ffd23dcf8680_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58c3977d0cf4ccbba6890893f6f551c933babd9320b3688e721030a65310eee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c3977d0cf4ccbba6890893f6f551c933babd9320b3688e721030a65310eee4->enter($__internal_58c3977d0cf4ccbba6890893f6f551c933babd9320b3688e721030a65310eee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bdf5c1442dbec749426ccad3cd26a0f7f48489f7465075bb403283b03e7f3870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf5c1442dbec749426ccad3cd26a0f7f48489f7465075bb403283b03e7f3870->enter($__internal_bdf5c1442dbec749426ccad3cd26a0f7f48489f7465075bb403283b03e7f3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bdf5c1442dbec749426ccad3cd26a0f7f48489f7465075bb403283b03e7f3870->leave($__internal_bdf5c1442dbec749426ccad3cd26a0f7f48489f7465075bb403283b03e7f3870_prof);

        
        $__internal_58c3977d0cf4ccbba6890893f6f551c933babd9320b3688e721030a65310eee4->leave($__internal_58c3977d0cf4ccbba6890893f6f551c933babd9320b3688e721030a65310eee4_prof);

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
