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
        $__internal_c71611b49315803ad8274313909f564f160e9628ca3205384b7dcad5994d33fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71611b49315803ad8274313909f564f160e9628ca3205384b7dcad5994d33fd->enter($__internal_c71611b49315803ad8274313909f564f160e9628ca3205384b7dcad5994d33fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_be830cad3389f7a3857dd70138efea003c03c9c1f64e44eab7476b9262fb286a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be830cad3389f7a3857dd70138efea003c03c9c1f64e44eab7476b9262fb286a->enter($__internal_be830cad3389f7a3857dd70138efea003c03c9c1f64e44eab7476b9262fb286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c71611b49315803ad8274313909f564f160e9628ca3205384b7dcad5994d33fd->leave($__internal_c71611b49315803ad8274313909f564f160e9628ca3205384b7dcad5994d33fd_prof);

        
        $__internal_be830cad3389f7a3857dd70138efea003c03c9c1f64e44eab7476b9262fb286a->leave($__internal_be830cad3389f7a3857dd70138efea003c03c9c1f64e44eab7476b9262fb286a_prof);

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
