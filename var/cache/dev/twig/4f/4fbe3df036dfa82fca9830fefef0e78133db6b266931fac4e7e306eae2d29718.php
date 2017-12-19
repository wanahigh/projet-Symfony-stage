<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a10d14648a1189aebb292d2a7ae6246880eff71f9a605ef3e4451642a468f08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f169eed1ab3334d3daa50f411a4a539fa161fbf27ad8d91d0013f41b586f9d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f169eed1ab3334d3daa50f411a4a539fa161fbf27ad8d91d0013f41b586f9d07->enter($__internal_f169eed1ab3334d3daa50f411a4a539fa161fbf27ad8d91d0013f41b586f9d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_4b1713207e3693d6b8291b3438db7c6db17daadff49d6be629a8ced558e5d675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1713207e3693d6b8291b3438db7c6db17daadff49d6be629a8ced558e5d675->enter($__internal_4b1713207e3693d6b8291b3438db7c6db17daadff49d6be629a8ced558e5d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f169eed1ab3334d3daa50f411a4a539fa161fbf27ad8d91d0013f41b586f9d07->leave($__internal_f169eed1ab3334d3daa50f411a4a539fa161fbf27ad8d91d0013f41b586f9d07_prof);

        
        $__internal_4b1713207e3693d6b8291b3438db7c6db17daadff49d6be629a8ced558e5d675->leave($__internal_4b1713207e3693d6b8291b3438db7c6db17daadff49d6be629a8ced558e5d675_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8b7e27263b95503d219b79754633b618a2ae56092e091852bdbb100efabc2cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7e27263b95503d219b79754633b618a2ae56092e091852bdbb100efabc2cb2->enter($__internal_8b7e27263b95503d219b79754633b618a2ae56092e091852bdbb100efabc2cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7223c3971d092318f68967aecef424c83a7e2ac1a7033c818ecfc4cfada4ca3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7223c3971d092318f68967aecef424c83a7e2ac1a7033c818ecfc4cfada4ca3b->enter($__internal_7223c3971d092318f68967aecef424c83a7e2ac1a7033c818ecfc4cfada4ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_7223c3971d092318f68967aecef424c83a7e2ac1a7033c818ecfc4cfada4ca3b->leave($__internal_7223c3971d092318f68967aecef424c83a7e2ac1a7033c818ecfc4cfada4ca3b_prof);

        
        $__internal_8b7e27263b95503d219b79754633b618a2ae56092e091852bdbb100efabc2cb2->leave($__internal_8b7e27263b95503d219b79754633b618a2ae56092e091852bdbb100efabc2cb2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d8ace47239454557022e79ba763950d4c29b1b34bd120fdbbe43f9ccdf5eee16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ace47239454557022e79ba763950d4c29b1b34bd120fdbbe43f9ccdf5eee16->enter($__internal_d8ace47239454557022e79ba763950d4c29b1b34bd120fdbbe43f9ccdf5eee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d6607596f43fcfe6b22ddf0da4908143968e1265ba800fa9fea1c73d17b7a614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6607596f43fcfe6b22ddf0da4908143968e1265ba800fa9fea1c73d17b7a614->enter($__internal_d6607596f43fcfe6b22ddf0da4908143968e1265ba800fa9fea1c73d17b7a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_d6607596f43fcfe6b22ddf0da4908143968e1265ba800fa9fea1c73d17b7a614->leave($__internal_d6607596f43fcfe6b22ddf0da4908143968e1265ba800fa9fea1c73d17b7a614_prof);

        
        $__internal_d8ace47239454557022e79ba763950d4c29b1b34bd120fdbbe43f9ccdf5eee16->leave($__internal_d8ace47239454557022e79ba763950d4c29b1b34bd120fdbbe43f9ccdf5eee16_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a8c887ce3649226b3aeb31c2d5ac19709a30fdd17a6eaa6a61dc196917658b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c887ce3649226b3aeb31c2d5ac19709a30fdd17a6eaa6a61dc196917658b39->enter($__internal_a8c887ce3649226b3aeb31c2d5ac19709a30fdd17a6eaa6a61dc196917658b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2903e9964c2fddf391cecddb2bd34c596a951133f67930a09dd29dc76dbddfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2903e9964c2fddf391cecddb2bd34c596a951133f67930a09dd29dc76dbddfb0->enter($__internal_2903e9964c2fddf391cecddb2bd34c596a951133f67930a09dd29dc76dbddfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2903e9964c2fddf391cecddb2bd34c596a951133f67930a09dd29dc76dbddfb0->leave($__internal_2903e9964c2fddf391cecddb2bd34c596a951133f67930a09dd29dc76dbddfb0_prof);

        
        $__internal_a8c887ce3649226b3aeb31c2d5ac19709a30fdd17a6eaa6a61dc196917658b39->leave($__internal_a8c887ce3649226b3aeb31c2d5ac19709a30fdd17a6eaa6a61dc196917658b39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
