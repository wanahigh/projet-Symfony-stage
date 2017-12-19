<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a5bd4b684f136a382d6b8ff9bc7b351e18542d5bb0be2b56f64c3bc80cc3a08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4404b71c6da965f20a462d625b885c11b03dca2ac919a6cacedd0b181a7f5f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4404b71c6da965f20a462d625b885c11b03dca2ac919a6cacedd0b181a7f5f4c->enter($__internal_4404b71c6da965f20a462d625b885c11b03dca2ac919a6cacedd0b181a7f5f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f65589cb76a64f1d082aea2eb4f4b3a6318d5c96210b9c505494be348c6844a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65589cb76a64f1d082aea2eb4f4b3a6318d5c96210b9c505494be348c6844a7->enter($__internal_f65589cb76a64f1d082aea2eb4f4b3a6318d5c96210b9c505494be348c6844a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4404b71c6da965f20a462d625b885c11b03dca2ac919a6cacedd0b181a7f5f4c->leave($__internal_4404b71c6da965f20a462d625b885c11b03dca2ac919a6cacedd0b181a7f5f4c_prof);

        
        $__internal_f65589cb76a64f1d082aea2eb4f4b3a6318d5c96210b9c505494be348c6844a7->leave($__internal_f65589cb76a64f1d082aea2eb4f4b3a6318d5c96210b9c505494be348c6844a7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_715d87b3d062f06f3385f64e492e8159cb3bb390571142c6f919c5aef92847d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715d87b3d062f06f3385f64e492e8159cb3bb390571142c6f919c5aef92847d6->enter($__internal_715d87b3d062f06f3385f64e492e8159cb3bb390571142c6f919c5aef92847d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6150c30a9ed8244040f770d4bc2bf57a1e883f41bbaac75d98637db32be45906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6150c30a9ed8244040f770d4bc2bf57a1e883f41bbaac75d98637db32be45906->enter($__internal_6150c30a9ed8244040f770d4bc2bf57a1e883f41bbaac75d98637db32be45906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6150c30a9ed8244040f770d4bc2bf57a1e883f41bbaac75d98637db32be45906->leave($__internal_6150c30a9ed8244040f770d4bc2bf57a1e883f41bbaac75d98637db32be45906_prof);

        
        $__internal_715d87b3d062f06f3385f64e492e8159cb3bb390571142c6f919c5aef92847d6->leave($__internal_715d87b3d062f06f3385f64e492e8159cb3bb390571142c6f919c5aef92847d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
