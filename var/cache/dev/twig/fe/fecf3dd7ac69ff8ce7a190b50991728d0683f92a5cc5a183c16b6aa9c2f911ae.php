<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2bce84114d955adafb80988aa6e6c11f4b07d5a44754459049f19bbf92a04438 extends Twig_Template
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
        $__internal_79d90824584f25f8165f9eb986965f9779de747e8667adde811d7405e5d55813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d90824584f25f8165f9eb986965f9779de747e8667adde811d7405e5d55813->enter($__internal_79d90824584f25f8165f9eb986965f9779de747e8667adde811d7405e5d55813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_bb66d0a70afa2b2c505974d45d035efd0b3f077d83ac9ed3a17dfa8df98cbaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb66d0a70afa2b2c505974d45d035efd0b3f077d83ac9ed3a17dfa8df98cbaff->enter($__internal_bb66d0a70afa2b2c505974d45d035efd0b3f077d83ac9ed3a17dfa8df98cbaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_79d90824584f25f8165f9eb986965f9779de747e8667adde811d7405e5d55813->leave($__internal_79d90824584f25f8165f9eb986965f9779de747e8667adde811d7405e5d55813_prof);

        
        $__internal_bb66d0a70afa2b2c505974d45d035efd0b3f077d83ac9ed3a17dfa8df98cbaff->leave($__internal_bb66d0a70afa2b2c505974d45d035efd0b3f077d83ac9ed3a17dfa8df98cbaff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
