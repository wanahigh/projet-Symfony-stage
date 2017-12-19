<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_99c783a1e9012162a0c4fab1dd51d7d7ee3e8495080c0ba8ba0f742f7f311aa6 extends Twig_Template
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
        $__internal_c078c3d35cd99f2c2971222269bbce86ad7a1f4aed4dcb1ce6028e6e2a983853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c078c3d35cd99f2c2971222269bbce86ad7a1f4aed4dcb1ce6028e6e2a983853->enter($__internal_c078c3d35cd99f2c2971222269bbce86ad7a1f4aed4dcb1ce6028e6e2a983853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_efb8cc45da59c55d5afc35a2426029c0d41754847226304423321b6fe5337a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb8cc45da59c55d5afc35a2426029c0d41754847226304423321b6fe5337a58->enter($__internal_efb8cc45da59c55d5afc35a2426029c0d41754847226304423321b6fe5337a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_c078c3d35cd99f2c2971222269bbce86ad7a1f4aed4dcb1ce6028e6e2a983853->leave($__internal_c078c3d35cd99f2c2971222269bbce86ad7a1f4aed4dcb1ce6028e6e2a983853_prof);

        
        $__internal_efb8cc45da59c55d5afc35a2426029c0d41754847226304423321b6fe5337a58->leave($__internal_efb8cc45da59c55d5afc35a2426029c0d41754847226304423321b6fe5337a58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
