<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9da032d9e006e712a25926552283262f55a6e96512ccd7350ae51433a01f5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9046d14809fcbb86d0f7b91bc0ebd691bb5f0a58570eff3444d67ae07ff3eb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9046d14809fcbb86d0f7b91bc0ebd691bb5f0a58570eff3444d67ae07ff3eb31->enter($__internal_9046d14809fcbb86d0f7b91bc0ebd691bb5f0a58570eff3444d67ae07ff3eb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fd4bda2fb6f4ac39363fadbeb87be51527f5ccb611ce620c5b7a6bfc773bfd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4bda2fb6f4ac39363fadbeb87be51527f5ccb611ce620c5b7a6bfc773bfd60->enter($__internal_fd4bda2fb6f4ac39363fadbeb87be51527f5ccb611ce620c5b7a6bfc773bfd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9046d14809fcbb86d0f7b91bc0ebd691bb5f0a58570eff3444d67ae07ff3eb31->leave($__internal_9046d14809fcbb86d0f7b91bc0ebd691bb5f0a58570eff3444d67ae07ff3eb31_prof);

        
        $__internal_fd4bda2fb6f4ac39363fadbeb87be51527f5ccb611ce620c5b7a6bfc773bfd60->leave($__internal_fd4bda2fb6f4ac39363fadbeb87be51527f5ccb611ce620c5b7a6bfc773bfd60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b0c8e47f12779e0ae653e826a020589b7030a0ab0ba0a840735ccfc61131c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0c8e47f12779e0ae653e826a020589b7030a0ab0ba0a840735ccfc61131c14->enter($__internal_0b0c8e47f12779e0ae653e826a020589b7030a0ab0ba0a840735ccfc61131c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_193d39c49bdb04a3a93513fe4979fb0ba0a2c3add45f24fd108d5b1c654a64d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193d39c49bdb04a3a93513fe4979fb0ba0a2c3add45f24fd108d5b1c654a64d8->enter($__internal_193d39c49bdb04a3a93513fe4979fb0ba0a2c3add45f24fd108d5b1c654a64d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_193d39c49bdb04a3a93513fe4979fb0ba0a2c3add45f24fd108d5b1c654a64d8->leave($__internal_193d39c49bdb04a3a93513fe4979fb0ba0a2c3add45f24fd108d5b1c654a64d8_prof);

        
        $__internal_0b0c8e47f12779e0ae653e826a020589b7030a0ab0ba0a840735ccfc61131c14->leave($__internal_0b0c8e47f12779e0ae653e826a020589b7030a0ab0ba0a840735ccfc61131c14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ab52c684905a0256890c2c4aef3249f57fb4157626f407586db8c69b52e7178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab52c684905a0256890c2c4aef3249f57fb4157626f407586db8c69b52e7178->enter($__internal_9ab52c684905a0256890c2c4aef3249f57fb4157626f407586db8c69b52e7178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a1e2f91c73c3a9444fc8fe6e1e6f64462faa962e9194d82f11c86e9de888710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1e2f91c73c3a9444fc8fe6e1e6f64462faa962e9194d82f11c86e9de888710->enter($__internal_7a1e2f91c73c3a9444fc8fe6e1e6f64462faa962e9194d82f11c86e9de888710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7a1e2f91c73c3a9444fc8fe6e1e6f64462faa962e9194d82f11c86e9de888710->leave($__internal_7a1e2f91c73c3a9444fc8fe6e1e6f64462faa962e9194d82f11c86e9de888710_prof);

        
        $__internal_9ab52c684905a0256890c2c4aef3249f57fb4157626f407586db8c69b52e7178->leave($__internal_9ab52c684905a0256890c2c4aef3249f57fb4157626f407586db8c69b52e7178_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
