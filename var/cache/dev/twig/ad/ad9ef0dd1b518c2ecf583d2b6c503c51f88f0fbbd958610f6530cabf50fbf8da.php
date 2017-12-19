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
        $__internal_c5c080c7b9faf13e27f29f213aebdf06928541e6d0f9a0899bff2bae77713fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c080c7b9faf13e27f29f213aebdf06928541e6d0f9a0899bff2bae77713fef->enter($__internal_c5c080c7b9faf13e27f29f213aebdf06928541e6d0f9a0899bff2bae77713fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_c5a4de45396543120b51163881b83015d5382704d6f389b5af798536d0fd7cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4de45396543120b51163881b83015d5382704d6f389b5af798536d0fd7cc8->enter($__internal_c5a4de45396543120b51163881b83015d5382704d6f389b5af798536d0fd7cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c080c7b9faf13e27f29f213aebdf06928541e6d0f9a0899bff2bae77713fef->leave($__internal_c5c080c7b9faf13e27f29f213aebdf06928541e6d0f9a0899bff2bae77713fef_prof);

        
        $__internal_c5a4de45396543120b51163881b83015d5382704d6f389b5af798536d0fd7cc8->leave($__internal_c5a4de45396543120b51163881b83015d5382704d6f389b5af798536d0fd7cc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f65ee6735aa88c2b2199c8371cc1ca123d76ff6bc617e2dfd4311592ef715b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65ee6735aa88c2b2199c8371cc1ca123d76ff6bc617e2dfd4311592ef715b28->enter($__internal_f65ee6735aa88c2b2199c8371cc1ca123d76ff6bc617e2dfd4311592ef715b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4003563ef60176da5aaaba93cdab29c95e78578d6247a9f574dc71a51262d482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4003563ef60176da5aaaba93cdab29c95e78578d6247a9f574dc71a51262d482->enter($__internal_4003563ef60176da5aaaba93cdab29c95e78578d6247a9f574dc71a51262d482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4003563ef60176da5aaaba93cdab29c95e78578d6247a9f574dc71a51262d482->leave($__internal_4003563ef60176da5aaaba93cdab29c95e78578d6247a9f574dc71a51262d482_prof);

        
        $__internal_f65ee6735aa88c2b2199c8371cc1ca123d76ff6bc617e2dfd4311592ef715b28->leave($__internal_f65ee6735aa88c2b2199c8371cc1ca123d76ff6bc617e2dfd4311592ef715b28_prof);

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
