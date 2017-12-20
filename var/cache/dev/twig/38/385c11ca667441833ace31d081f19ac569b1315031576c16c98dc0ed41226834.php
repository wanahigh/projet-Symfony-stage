<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c09c65e749ddb5e5503aa8ace49b9c164a1635795f580df8248d2740dab027df extends Twig_Template
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
        $__internal_5e6f93afda10694602d40ff1cb34704923937108ab8a2641dca4e7bf74d4c8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6f93afda10694602d40ff1cb34704923937108ab8a2641dca4e7bf74d4c8f6->enter($__internal_5e6f93afda10694602d40ff1cb34704923937108ab8a2641dca4e7bf74d4c8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_bb413d5ca714e8824bd9f97458ba093c9b62b0b4dc39d6494cb2e4e9afa90ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb413d5ca714e8824bd9f97458ba093c9b62b0b4dc39d6494cb2e4e9afa90ed0->enter($__internal_bb413d5ca714e8824bd9f97458ba093c9b62b0b4dc39d6494cb2e4e9afa90ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5e6f93afda10694602d40ff1cb34704923937108ab8a2641dca4e7bf74d4c8f6->leave($__internal_5e6f93afda10694602d40ff1cb34704923937108ab8a2641dca4e7bf74d4c8f6_prof);

        
        $__internal_bb413d5ca714e8824bd9f97458ba093c9b62b0b4dc39d6494cb2e4e9afa90ed0->leave($__internal_bb413d5ca714e8824bd9f97458ba093c9b62b0b4dc39d6494cb2e4e9afa90ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
