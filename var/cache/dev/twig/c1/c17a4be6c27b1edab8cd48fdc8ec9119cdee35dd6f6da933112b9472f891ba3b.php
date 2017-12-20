<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8e2991bbff8e70d34881c8fbae6dcefd76e90ebbcf03559f2d2ec293a315ec44 extends Twig_Template
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
        $__internal_d46172a0ce201a020c788395f2243baebf10abbfb81fa6f99e4aa81170b66ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46172a0ce201a020c788395f2243baebf10abbfb81fa6f99e4aa81170b66ec1->enter($__internal_d46172a0ce201a020c788395f2243baebf10abbfb81fa6f99e4aa81170b66ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_07364c8eaeb6c09c44667c0881bd437df25a0f0af0cb32f329ea330aa742dacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07364c8eaeb6c09c44667c0881bd437df25a0f0af0cb32f329ea330aa742dacf->enter($__internal_07364c8eaeb6c09c44667c0881bd437df25a0f0af0cb32f329ea330aa742dacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d46172a0ce201a020c788395f2243baebf10abbfb81fa6f99e4aa81170b66ec1->leave($__internal_d46172a0ce201a020c788395f2243baebf10abbfb81fa6f99e4aa81170b66ec1_prof);

        
        $__internal_07364c8eaeb6c09c44667c0881bd437df25a0f0af0cb32f329ea330aa742dacf->leave($__internal_07364c8eaeb6c09c44667c0881bd437df25a0f0af0cb32f329ea330aa742dacf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
