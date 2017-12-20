<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f5de655ec9b716f973a6c72cc00ee386b00c59de52a752d52522d8dcd429a9d extends Twig_Template
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
        $__internal_69c7da027340feb14af3f112c20d1728535f340cca6d2b0da5795351139708f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c7da027340feb14af3f112c20d1728535f340cca6d2b0da5795351139708f1->enter($__internal_69c7da027340feb14af3f112c20d1728535f340cca6d2b0da5795351139708f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_17040b9a6d3bec9e7b665c28609a686d14ec107dd41910e835db591e6677668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17040b9a6d3bec9e7b665c28609a686d14ec107dd41910e835db591e6677668d->enter($__internal_17040b9a6d3bec9e7b665c28609a686d14ec107dd41910e835db591e6677668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_69c7da027340feb14af3f112c20d1728535f340cca6d2b0da5795351139708f1->leave($__internal_69c7da027340feb14af3f112c20d1728535f340cca6d2b0da5795351139708f1_prof);

        
        $__internal_17040b9a6d3bec9e7b665c28609a686d14ec107dd41910e835db591e6677668d->leave($__internal_17040b9a6d3bec9e7b665c28609a686d14ec107dd41910e835db591e6677668d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
