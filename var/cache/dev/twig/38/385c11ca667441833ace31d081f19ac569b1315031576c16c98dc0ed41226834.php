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
        $__internal_62cfa52cb82d9a2bbf70338813698dc1076902c3faa57edbe632b136df41bb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cfa52cb82d9a2bbf70338813698dc1076902c3faa57edbe632b136df41bb69->enter($__internal_62cfa52cb82d9a2bbf70338813698dc1076902c3faa57edbe632b136df41bb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fd990567cb2785ccb9d7babb3e586f0dd482db1f97a2d5be295c9d84d3f3e6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd990567cb2785ccb9d7babb3e586f0dd482db1f97a2d5be295c9d84d3f3e6e6->enter($__internal_fd990567cb2785ccb9d7babb3e586f0dd482db1f97a2d5be295c9d84d3f3e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_62cfa52cb82d9a2bbf70338813698dc1076902c3faa57edbe632b136df41bb69->leave($__internal_62cfa52cb82d9a2bbf70338813698dc1076902c3faa57edbe632b136df41bb69_prof);

        
        $__internal_fd990567cb2785ccb9d7babb3e586f0dd482db1f97a2d5be295c9d84d3f3e6e6->leave($__internal_fd990567cb2785ccb9d7babb3e586f0dd482db1f97a2d5be295c9d84d3f3e6e6_prof);

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
