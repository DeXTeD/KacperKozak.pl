
viewport = $ window
body = $ 'body'

menu        = $ '#menu'
menuTrigger = $ '#menu-trigger'
menuList    = $ '#menu-list'
menuOpened  = no

do ->
	onTop = true
	viewport.scroll ->
		console.log "aaa"
		scroll = +viewport.scrollTop()
		oldOnTop = onTop
		onTop = scroll < 30

		if oldOnTop isnt onTop
			body.toggleClass 'onTop', onTop
			body.toggleClass 'notOnTop', not onTop

		return
	return



$('[data-circle]').circliful
	foregroundColor: "#333"
	backgroundColor: "#eee"
	fillColor: false
	width: 5
	dimension: 140
	size: 16
	animationStep: 2.0



body.on 'click', 'a', (event) ->
	a = $ this
	href = a.attr 'href'

	if href[0] is '#'
		event.preventDefault()

		if href is '#'
			topOffset = 0
		else
			offsetTarget = $ href
			return unless offsetTarget.length
			topOffset = offsetTarget.offset().top - 45

		$('html').animate scrollTop: topOffset,
			duration: 600,
			easing: 'easeOutQuint'

	return



menuTrigger.on 'click', (event) ->
	event.preventDefault()
	if not menuOpened
		menuOpened = yes
		menu.addClass 'open'
		setTimeout ->
			body.one 'click.menu-close', ->
				menuOpened = no
				menu.removeClass 'open'
		, 1

