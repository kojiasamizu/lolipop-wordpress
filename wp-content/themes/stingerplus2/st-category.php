<?php
//カテゴリ追加
add_action ( 'edit_category_form_fields', 'extra_category_fields');
function extra_category_fields( $tag ) {
    $t_id = $tag->term_id;
    $cat_meta = get_option( "cat_$t_id");
    $cat_meta['st_cattitle'] = isset($cat_meta['st_cattitle']) ? $cat_meta['st_cattitle'] : '' ;
    $cat_meta['st_catmetakeyword'] = isset($cat_meta['st_catmetakeyword']) ? $cat_meta['st_catmetakeyword'] : '' ;
    $cat_meta['st_catmetadescription'] = isset($cat_meta['st_catmetadescription']) ? $cat_meta['st_catmetadescription'] : '' ;
    $cat_meta['listdelete'] = isset($cat_meta['listdelete']) ? $cat_meta['listdelete'] : '' ;
    $cat_meta['snscat'] = isset($cat_meta['snscat']) ? $cat_meta['snscat'] : '' ;
?>
<tr class="form-field">
    <th><label for="st_cattitle">カテゴリータイトルの書き替え</label><span class="pro-only"><a href="//on-store.net" target="_blank" rel="nofollow">PRO</a></span></th>
    <td><input disabled="disabled" type="text" name="Cat_meta[st_cattitle]" id="st_cattitle" size="25" value="<?php if(isset ( $cat_meta['st_cattitle'])) echo esc_html($cat_meta['st_cattitle']) ?>" /><p class="description">※テーマ管理画面にて「WPデフォルトのタイトル出力を使用する」にチェックが入っているとtitleタグには反映されません</p></td>
</tr>

<tr class="form-field">
    <th><label for="st_catmetakeyword">カテゴリーのメタキーワード</label><span class="pro-only"><a href="//on-store.net" target="_blank" rel="nofollow">PRO</a></span></th>
    <td><input disabled="disabled" type="text" name="Cat_meta[st_catmetakeyword]" id="st_catmetakeyword" size="25" value="<?php if(isset ( $cat_meta['st_catmetakeyword'])) echo esc_html($cat_meta['st_catmetakeyword']) ?>" /><p class="description">※複数指定する場合は半角カンマで区切ってください</p></td>
</tr>

<tr class="form-field">
    <th><label for="st_catmetadescription">カテゴリーのメタディスクリプション</label><span class="pro-only"><a href="//on-store.net" target="_blank" rel="nofollow">PRO</a></span></th>
    <td><textarea disabled="disabled" id="st_catmetadescription" rows="4" type="text" name="Cat_meta[st_catmetadescription]" /><?php echo esc_attr( $cat_meta['st_catmetadescription'] ); ?></textarea></td>
</tr>

<tr class="form-field">
    <th><label for="listdelete">投稿の一覧表示</label></th>
    <td><input type="radio" name="Cat_meta[listdelete]" id="listdelete" value="" <?php if(isset( $cat_meta['listdelete']) && $cat_meta['listdelete'] === '') echo 'checked="checked"' ?>" /> する<br/>
<input type="radio" name="Cat_meta[listdelete]" id="listdelete" value="no" <?php if(isset( $cat_meta['listdelete']) && $cat_meta['listdelete'] === 'no') echo 'checked="checked"' ?>" /> しない
</td>
</tr>
<tr class="form-field">
    <th><label for="snscat">SNSボタンの表示</label></th>
    <td><input type="radio" name="Cat_meta[snscat]" id="snscat" value="yes" <?php if(isset( $cat_meta['snscat']) && $cat_meta['snscat'] === 'yes') echo 'checked="checked"' ?>" /> する<br/>
<input type="radio" name="Cat_meta[snscat]" id="snscat" value="" <?php if(isset( $cat_meta['snscat']) && $cat_meta['snscat'] === '') echo 'checked="checked"' ?>" /> しない
</td>
</tr>
<?php
}
//保存
add_action ( 'edited_term', 'save_extra_category_fileds');
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
	  $t_id = $term_id;
	  $cat_meta = get_option( "cat_$t_id");
	  $cat_keys = array_keys($_POST['Cat_meta']);
		foreach ($cat_keys as $key){
		if (isset($_POST['Cat_meta'][$key])){
		   $cat_meta[$key] = $_POST['Cat_meta'][$key];
		}
	  }
	  update_option( "cat_$t_id", $cat_meta );
    }
}

// カテゴリキーワード・ディスクリプション表示
function st_catmeta_source() {
	if ( !is_category() ) {
		return;
	}

	$current_cat_id = get_query_var( 'cat' ); // 現在のカテゴリIDを取得
	$cat_data         = get_option( 'cat_' . $current_cat_id, array() );
	$cat_keyword      = isset( $cat_data['st_catmetakeyword'] ) ? trim( $cat_data['st_catmetakeyword'] ) : '';
	$cat_description  = isset( $cat_data['st_catmetadescription'] ) ? trim( $cat_data['st_catmetadescription'] ) : '';

	if ( $cat_keyword !== '' ) {
		echo '<meta name="keywords" content="' . esc_attr( $cat_keyword ) . '">' . "\n";
	}

	if ( $cat_description !== '' ) {
		echo '<meta name="description" content="' . esc_attr( $cat_description ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'st_catmeta_source' );
