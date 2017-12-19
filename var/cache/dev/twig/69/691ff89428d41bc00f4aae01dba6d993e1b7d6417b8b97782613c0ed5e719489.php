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
        $__internal_bd95b912f7c017c4b10b7e7dbea10d4c107509eed32d0726661c7669c4b16eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd95b912f7c017c4b10b7e7dbea10d4c107509eed32d0726661c7669c4b16eb7->enter($__internal_bd95b912f7c017c4b10b7e7dbea10d4c107509eed32d0726661c7669c4b16eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a8455f55c75f4164864f5dfa5a72631a82a94b4e9f93a935bbf9721bfec8476d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8455f55c75f4164864f5dfa5a72631a82a94b4e9f93a935bbf9721bfec8476d->enter($__internal_a8455f55c75f4164864f5dfa5a72631a82a94b4e9f93a935bbf9721bfec8476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bd95b912f7c017c4b10b7e7dbea10d4c107509eed32d0726661c7669c4b16eb7->leave($__internal_bd95b912f7c017c4b10b7e7dbea10d4c107509eed32d0726661c7669c4b16eb7_prof);

        
        $__internal_a8455f55c75f4164864f5dfa5a72631a82a94b4e9f93a935bbf9721bfec8476d->leave($__internal_a8455f55c75f4164864f5dfa5a72631a82a94b4e9f93a935bbf9721bfec8476d_prof);

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
