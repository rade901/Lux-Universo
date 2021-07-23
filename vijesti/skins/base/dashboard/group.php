<?php

list($grp, $group_id, $group_name, $group_grp, $access, $group_add, $group_sub, $group_system, $form_desc) = _GL('grp, group_id, group_name, group_grp, access, group_add, group_sub, group_system, form_desc');

cn_snippet_messages();
cn_snippet_bc();

?>

<section>
	<div class="container">
		<!-- show categories -->
		<form action="<?php echo PHP_SELF; ?>" method="POST">

			<?php cn_form_open('mod, opt'); ?>
			<input type="hidden" name="group_id" value="<?php echo intval($group_id); ?>" />

			<table class="table table-bordered table-striped table-hover">
				<tr><th>ID</th> <th>Name</th> <th>Access rights</th> <th>In groups</th> <th width="1">Sys</th> </tr>

				<?php foreach ($grp as $id => $acl) { ?>

					<tr<?php if ($id == $group_id) { echo ' class="row_selected"'; } ?>>

						<td align="center"><?php echo $id; ?></td>
						<td><a href="<?php echo cn_url_modify("group_id=$id"); ?>"><?php echo cn_htmlspecialchars($acl['name']); ?></a></td>
						<td><?php

							$ps = array();
							$sp = spsep($acl['acl']);

							foreach ($sp as $name)
							{
								$ps[] = '<a href="#" title="'.join('; ', $form_desc[$name]).'" onclick="return(tiny_msg(this));">'.$name.'</a>';
							}
							echo join(', ', $ps);

						?>
						</td>
						<td><?php echo join('<br>', $acl['grp']); ?></td>
						<td align="center"><?php echo $acl['system'] && in_array($id, array(1,5)) ? 'Y' : ''; ?> </td>

					</tr>

				<?php } ?>

			</table>

            <?php if ($group_id == 1 || $group_id == 5) { ?>
                <h3 style="color: red;">Warning: system group can't be modified.</h3>
            <?php } ?>

			<table class="table table-bordered table-striped table-hover">

				<tr>
					<td align="right"><input type="checkbox" name="master_box" onclick="check_uncheck_all('acl[]');" value="Y"/></td>
					<td>All privileges</td>
				</tr>

				<tr>
					<td>Name <span class="required">*</span></td>
					<td><input type="text" name="group_name" value="<?php echo cn_htmlspecialchars($group_name); ?>" required/><div>enter another name to create inherited group</div></td>
				</tr>

				<tr>
					<td>Consists</td>
					<td><input type="text" name="group_grp" value="<?php echo cn_htmlspecialchars($group_grp); ?>"/><div>group ids, comma separated</div></td>
				</tr>

				<!-- show all ACLs -->
				<?php foreach ($access as $group => $cons) {  ?>
					<!--tr><td></td><td><hr/></td></tr-->
					<tr>
						<td><?php echo $group; ?></td>
						<td>
							<?php foreach ($cons as $name => $desc) { ?>
								<span style="float: left; width: 200px;">
									<input title="<?php echo $name; ?>" type="checkbox" name="acl[]" <?php if ($desc['c']) { echo 'checked'; } ?> value="<?php echo $name; ?>" />
									<?php
										if ($desc['t'])
										{
											echo '<a href="#" title="'.cn_htmlspecialchars($desc['t']).'" onclick="return (tiny_msg(this));">'.cn_htmlspecialchars($desc['d']).'</a>';
										}
										else
										{
											echo cn_htmlspecialchars($desc['d']);
										}
									?>
								</span>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				<!--tr><td></td><td><hr/></td></tr-->

					<tr>
						<td>&nbsp;</td>
						<td>
							<div class="pull-left">
								<input class="btn btn-primary" type="submit" onclick="setMode('add');" value="Add group" />&nbsp;

								<?php if ($group_id && ($group_id != 1 && $group_id != 5)) {?>
									<input class="btn btn-primary" type="submit" onclick="setMode('edit');" value="Edit group" />&nbsp;
								<?php } ?>

								<input type="hidden" id="mode" name="mode" value=""/>
								<!-- reset group to def. values -->
								<?php if ($group_system && $group_id&&($group_id!=1&&$group_id!=5)) { ?>
									<input class="btn btn-primary" type="submit" onclick="resetGroup();" value="Reset this group by default" />
									<input class="btn btn-primary" type="hidden" id="rest_grp" name="reset_group" value=""/>
								<?php } ?>
							</div>
							<div class="pull-rigth">
								<!-- delete non-system group -->
							   <?php if (!$group_system && $group_id) { ?>
								   <input class="btn btn-primary" type="submit" onclick="deleteGroup();" value="Delete group" />
								   <input class="btn btn-primary" type="hidden" id="del_grp" name="delete_group"  value=""/>
							   <?php } ?>
							</div>
						</td>


					</tr>

			</table>

		</form>
	</div>
</section>

<script type="text/javascript">
    function resetGroup()
    {
        var r=document.getElementById('rest_grp');
        r.setAttribute('value','Y');
        
    }
    
    function deleteGroup()
    {
        var d=document.getElementById('del_grp');
        d.setAttribute('value','Y');
    }
    
    function setMode(md)
    {
        var m=document.getElementById('mode');
        m.setAttribute('value',md);
    }
</script>