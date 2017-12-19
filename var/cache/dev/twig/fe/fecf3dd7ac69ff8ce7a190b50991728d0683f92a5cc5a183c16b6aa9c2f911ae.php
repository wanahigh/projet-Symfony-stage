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
        $__internal_9db69ff43e077f14d1bb6c4ec43dc91e6676c00438e00f397fc29b2395344efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db69ff43e077f14d1bb6c4ec43dc91e6676c00438e00f397fc29b2395344efe->enter($__internal_9db69ff43e077f14d1bb6c4ec43dc91e6676c00438e00f397fc29b2395344efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_aae7ba8181ac4bf18f369ab4a10a71452ccb9151df435cbdb007ad4b7bdb4b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae7ba8181ac4bf18f369ab4a10a71452ccb9151df435cbdb007ad4b7bdb4b70->enter($__internal_aae7ba8181ac4bf18f369ab4a10a71452ccb9151df435cbdb007ad4b7bdb4b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9db69ff43e077f14d1bb6c4ec43dc91e6676c00438e00f397fc29b2395344efe->leave($__internal_9db69ff43e077f14d1bb6c4ec43dc91e6676c00438e00f397fc29b2395344efe_prof);

        
        $__internal_aae7ba8181ac4bf18f369ab4a10a71452ccb9151df435cbdb007ad4b7bdb4b70->leave($__internal_aae7ba8181ac4bf18f369ab4a10a71452ccb9151df435cbdb007ad4b7bdb4b70_prof);

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
