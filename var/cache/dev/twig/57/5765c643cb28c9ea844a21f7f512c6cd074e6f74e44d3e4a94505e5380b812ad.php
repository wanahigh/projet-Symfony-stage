<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c41015bd356336e1d51cc7fc6517077d2a25a1cd036a98a187e57101a5b17586 extends Twig_Template
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
        $__internal_66c7c749ea091f79db78ded0d8dfb0af19b3681de510f3131b973917236703c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c7c749ea091f79db78ded0d8dfb0af19b3681de510f3131b973917236703c9->enter($__internal_66c7c749ea091f79db78ded0d8dfb0af19b3681de510f3131b973917236703c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8c6451a20648a0886e58d526812b1ae0448870f9f407a4ef0e723f754de6e740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6451a20648a0886e58d526812b1ae0448870f9f407a4ef0e723f754de6e740->enter($__internal_8c6451a20648a0886e58d526812b1ae0448870f9f407a4ef0e723f754de6e740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_66c7c749ea091f79db78ded0d8dfb0af19b3681de510f3131b973917236703c9->leave($__internal_66c7c749ea091f79db78ded0d8dfb0af19b3681de510f3131b973917236703c9_prof);

        
        $__internal_8c6451a20648a0886e58d526812b1ae0448870f9f407a4ef0e723f754de6e740->leave($__internal_8c6451a20648a0886e58d526812b1ae0448870f9f407a4ef0e723f754de6e740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
