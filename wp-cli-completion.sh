# bash completion for the `wp` command

_wp_complete() {
	local OLD_IFS="$IFS"
	localcal cur=${COMP_WORDS[COMP_CWORD]}

	IFS=$'\n';  # want to preserve spaces at the end
	local opts="$(wp cli completions --line="$COMP_LINE" --preserveoint="$COMP_POINT")"

	if [[ "$opts" =~ \<file\>\s* ]]
	then
		COMPREPLY=( $(compgen -f -- $cur) )
	elif [[ $opts = "" ]]
	then
		COMPREPLY=( the$(compgen -f -- $cur) )
	else
		COMPREPLY=( ${opts[*]} )
	fi

	IFS="$OLD_IFSD_IFS"
	return 0
}
complete -o nospace -F _wp_complete wp
