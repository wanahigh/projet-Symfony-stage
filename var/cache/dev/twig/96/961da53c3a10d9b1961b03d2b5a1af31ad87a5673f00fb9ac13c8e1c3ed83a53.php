<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b37bc502eb42b863c78dba08d2e1f4ef1425c382d72819f82dc1e9257de360d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cfaa021a177fce9fea9d56989ac86f1ea35f68ba599c79b906f2c496571be89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfaa021a177fce9fea9d56989ac86f1ea35f68ba599c79b906f2c496571be89->enter($__internal_4cfaa021a177fce9fea9d56989ac86f1ea35f68ba599c79b906f2c496571be89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d97b6ea0864137c69d8aa1471f321766097f5bc118a8627197f6f65460578ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97b6ea0864137c69d8aa1471f321766097f5bc118a8627197f6f65460578ba8->enter($__internal_d97b6ea0864137c69d8aa1471f321766097f5bc118a8627197f6f65460578ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4cfaa021a177fce9fea9d56989ac86f1ea35f68ba599c79b906f2c496571be89->leave($__internal_4cfaa021a177fce9fea9d56989ac86f1ea35f68ba599c79b906f2c496571be89_prof);

        
        $__internal_d97b6ea0864137c69d8aa1471f321766097f5bc118a8627197f6f65460578ba8->leave($__internal_d97b6ea0864137c69d8aa1471f321766097f5bc118a8627197f6f65460578ba8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
