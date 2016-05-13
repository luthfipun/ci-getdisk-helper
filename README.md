# ci-getdisk-helper

Get free disk space and total disk helper for codeigniter 3.x

<h3>Install</h3>
copy <code>diskspace_helper.php</code> to <code>application/helpers</code> on your ci project

<h3>Use</h3>
call on controllers
<code>$this->load->helper('diskspace');</code>

call on <code>config/autoload.php</code>

<code>$autoload['helper'] = array('diskspace');</code>

<h3>Examples</h3>
<code>
echo "Free Space : ".get_freespace("c:")." GB<br>"; // for linux change C: to "/"
</code>

<code>
echo "Total Disk : ".get_totalspace("c:")." GB";
</code>
