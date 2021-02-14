<div class="box">
	<div class="box-table">
		<?php
		echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
		$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
		echo form_open_multipart(current_full_url(), $attributes);
		?>
			<input type="hidden" name="<?php echo element('primary_key', $view); ?>"	value="<?php echo element(element('primary_key', $view), element('data', $view)); ?>" />

			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드 설명</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="qr_title" value="<?php echo set_value('qr_title', element('qr_title', element('data', $view))); ?>" />
				</div>
			</div>
			<!-- <div class="form-group">
				<label class="col-sm-2 control-label">시작일</label>
				<div class="col-sm-10 form-inline">
					<input type="text" class="form-control datepicker" name="qr_start_date" value="<?php echo set_value('qr_start_date', element('qr_start_date', element('data', $view))); ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">종료일</label>
				<div class="col-sm-10 form-inline">
					<input type="text" class="form-control datepicker" name="qr_end_date" value="<?php echo set_value('qr_end_date', element('qr_end_date', element('data', $view))); ?>" />
				</div>
			</div> -->
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드 구분</label>
				<div class="col-sm-10 form-inline">
					<select class="form-control" name="qrg_name">
						<option value="">=QR코드 구분 선택=</option>
						<?php
						if (element('group', $view)) {
							foreach (element('group', $view) as $gval) {
						?>
							<option value="<?php echo html_escape(element('qrg_name', $gval)); ?>" <?php echo set_select('qrg_name', element('qrg_name', $gval), (element('qrg_name', element('data', $view)) === element('qrg_name', $gval) ? true : false)); ?>><?php echo html_escape(element('qrg_name', $gval)); ?></option>
						<?php
							}
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드 URL</label>
				<div class="col-sm-10 form-inline">
					<label>/homestudy/kids/</label><input type="text" class="form-control" name="qr_url" value="<?php echo set_value('qr_url', element('qr_url', element('data', $view))); ?>" />
			<!-- 		<button type="submit" class="btn btn-danger btn-sm">중복체크</button>
					<input type="hidden" name="qr_dupcheck" id="qr_dupcheck" value="<?php echo set_value('qr_dupcheck', element('qr_dupcheck', element('data', $view))); ?>"/> -->
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Target URL</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="qr_target" value="<?php echo set_value('qr_target', element('qr_target', element('data', $view))); ?>" />
				</div>
			</div>
			<!-- <div class="form-group">
				<label class="col-sm-2 control-label">QR코드 사이즈</label>
				<div class="col-sm-10 form-inline">
					가로 :
					<input type="number" class="form-control" name="qr_width" value="<?php echo set_value('qr_width', (int) element('qr_width', element('data', $view))); ?>" />px
					,
					세로 :
					<input type="number" class="form-control" name="qr_height" value="<?php echo set_value('qr_height', (int) element('qr_height', element('data', $view))); ?>" />px
					<div class="help-inline">가로값과 세로값을 입력하시면 입력하신 사이즈로 QR코드가 출력이 되며, 입력하지 않으면 업로드한 원본 크기대로 출력됩니다</div>
				</div>
			</div> -->
			
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드 정렬순서</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="qr_order" value="<?php echo set_value('qr_order', (int) element('qr_order', element('data', $view))); ?>" />
					<div class="help-inline">정렬 순서가 큰 값이 먼저 출력됩니다</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드표시기기</label>
				<div class="col-sm-10 form-inline">
					<select class="form-control" name="qr_device">
						<option value="all" <?php echo set_select('qr_device', 'all', (element('qr_device', element('data', $view)) === 'all' ? true : false)); ?>>모든기기</option>
						<option value="pc" <?php echo set_select('qr_device', 'pc', (element('qr_device', element('data', $view)) === 'pc' ? true : false)); ?>>PC만</option>
						<option value="mobile" <?php echo set_select('qr_device', 'mobile', (element('qr_device', element('data', $view)) === 'mobile' ? true : false)); ?>>모바일만</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드활성화</label>
				<div class="col-sm-10">
					<label class="radio-inline" for="qr_activated_1">
						<input type="radio" name="qr_activated" id="qr_activated_1" value="1" <?php echo set_radio('qr_activated', '1', (element('qr_activated', element('data', $view)) === '1' ? true : false)); ?> /> 활성
					</label>
					<label class="radio-inline" for="qr_activated_0">
						<input type="radio" name="qr_activated" id="qr_activated_0" value="0" <?php echo set_radio('qr_activated', '0', (element('qr_activated', element('data', $view)) !== '1' ? true : false)); ?> /> 비활성
					</label>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드 설정</label>
				<div class="col-sm-10 form-inline">
					<label class="control-label" style="vertical-align: top;" >ECC Level: </label>
					<select class="form-control" name="qr_ecc_level">
						<option value="L" <?php echo set_select('qr_ecc_level', 'L', (element('qr_ecc_level', element('data', $view)) === 'L' ? true : false)); ?> >L - smallest</option>
						<option value="M" <?php echo set_select('qr_ecc_level', 'M', (element('qr_ecc_level', element('data', $view)) === 'M' ? true : false)); ?> >M</option>
						<option value="Q" <?php echo set_select('qr_ecc_level', 'Q', (element('qr_ecc_level', element('data', $view)) === 'Q' ? true : false)); ?> >Q</option>
						<option value="H" <?php echo set_select('qr_ecc_level', 'H', (element('qr_ecc_level', element('data', $view)) === 'H' ? true : false)); ?> >H - best</option>
					</select>
					<label class="control-label" style="vertical-align: top;">Pixel Size: </label>
					<select class="form-control" name="qr_pixel_size">
						<option value="1"  <?php echo set_select('qr_pixel_size', '1', (element('qr_pixel_size', element('data', $view)) === '1' ? true : false)); ?>>1</option>
						<option value="2"  <?php echo set_select('qr_pixel_size', '2', (element('qr_pixel_size', element('data', $view)) === '2' ? true : false)); ?>>2</option>
						<option value="3"  <?php echo set_select('qr_pixel_size', '3', (element('qr_pixel_size', element('data', $view)) === '3' ? true : false)); ?>>3</option>
						<option value="4"  <?php echo set_select('qr_pixel_size', '4', (element('qr_pixel_size', element('data', $view)) === '4' ? true : false)); ?>>4</option>
						<option value="5"  <?php echo set_select('qr_pixel_size', '5', (element('qr_pixel_size', element('data', $view)) === '5' ? true : false)); ?>>5</option>
						<option value="6"  <?php echo set_select('qr_pixel_size', '6', (element('qr_pixel_size', element('data', $view)) === '6' ? true : false)); ?>>6</option>
						<option value="7"  <?php echo set_select('qr_pixel_size', '7', (element('qr_pixel_size', element('data', $view)) === '7' ? true : false)); ?>>7</option>
						<option value="8"  <?php echo set_select('qr_pixel_size', '8', (element('qr_pixel_size', element('data', $view)) === '8' ? true : false)); ?>>8</option>
						<option value="9"  <?php echo set_select('qr_pixel_size', '9', (element('qr_pixel_size', element('data', $view)) === '9' ? true : false)); ?>>9</option>
						<option value="10" <?php echo set_select('qr_pixel_size', '10', (element('qr_pixel_size', element('data', $view)) === '10' ? true : false)); ?>>10</option>
					</select>
					<label class="control-label" style="vertical-align: top;">Frame Size: </label>
					<select class="form-control" name="qr_frame_size">
						<option value="1"  <?php echo set_select('qr_frame_size', '1', (element('qr_frame_size', element('data', $view)) === '1' ? true : false)); ?>>1</option>
						<option value="2"  <?php echo set_select('qr_frame_size', '2', (element('qr_frame_size', element('data', $view)) === '2' ? true : false)); ?>>2</option>
						<option value="3"  <?php echo set_select('qr_frame_size', '3', (element('qr_frame_size', element('data', $view)) === '3' ? true : false)); ?>>3</option>
						<option value="4"  <?php echo set_select('qr_frame_size', '4', (element('qr_frame_size', element('data', $view)) === '4' ? true : false)); ?>>4</option>
						<option value="5"  <?php echo set_select('qr_frame_size', '5', (element('qr_frame_size', element('data', $view)) === '5' ? true : false)); ?>>5</option>
						<option value="6"  <?php echo set_select('qr_frame_size', '6', (element('qr_frame_size', element('data', $view)) === '6' ? true : false)); ?>>6</option>
						<option value="7"  <?php echo set_select('qr_frame_size', '7', (element('qr_frame_size', element('data', $view)) === '7' ? true : false)); ?>>7</option>
						<option value="8"  <?php echo set_select('qr_frame_size', '8', (element('qr_frame_size', element('data', $view)) === '8' ? true : false)); ?>>8</option>
						<option value="9"  <?php echo set_select('qr_frame_size', '9', (element('qr_frame_size', element('data', $view)) === '9' ? true : false)); ?>>9</option>
						<option value="10" <?php echo set_select('qr_frame_size', '10', (element('qr_frame_size', element('data', $view)) === '10' ? true : false)); ?>>10</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">QR코드 이미지</label>
				<div class="col-lg-4" >
					<img style="background-color:lightgrey; padding:5px;" src="<?php echo site_url(element('qr_image', element('data', $view))); ?>" alt="QR코드 이미지" title="QR코드 이미지" />
				</div>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<button type="button" class="btn btn-default btn-sm btn-history-back" >취소하기</button>
				<button type="submit" class="btn btn-success btn-sm">저장하기</button>
			</div>
		<?php echo form_close(); ?>
	</div>

	
</div>




<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fadminwrite').validate({
		rules: {
			qr_title: 'required',
			qr_start_date: { alpha_dash:true, minlength:10, maxlength:10 },
			qr_end_date: { alpha_dash:true, minlength:10, maxlength:10 },
			qrg_name: 'required',
			qr_width: { number:true },
			qr_height: { number:true },
			qr_order: { number:true },
			qr_activated: 'required'
		}
	});
});
//]]>
</script>
