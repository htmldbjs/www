var repoURL = "https://api.github.com/repos/htmldbjs/htmldbjs/contents/docs?ref=dev";
var directoryList = []

function fetchDocs(url) {
	return new Promise(function (resolve, reject) {

		fetch(url).then(function (res) { return res.json() })
			.then(function (json) {
				directoryList = []
				json.map(async function (response) {
					directoryList.push({
						"type": response.type,
						"name": response.name,
						"path": response._links.self,
						"parentURL": url
					})
				});
				resolve(renderLinks(directoryList));
			})

	});
}

function b64DecodeUnicode(str) {
	// Going backwards: from bytestream, to percent-encoding, to original string.
	return new Promise(function (resolve, reject) {

		return decodeURIComponent(atob(str).split('').map(function (c) {
			return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
		}).join(''));

	});
}

async function renderLinks(links) {

	var linkList = document.getElementById('linkListContainer');
	var sectionContainer = document.getElementById('linkSectionsContainer');

	if (links.constructor === Array) {

		for (const link of links) {
			var parentElement = document.querySelector(`[data-path="${link.parentURL}"]`);

			if (parentElement) {
				var subList = document.createElement('ul');
				var subListItem = document.createElement('li');

				if (link.type === "dir") {
					subListItem.innerHTML = link.name;
					subListItem.setAttribute('data-path', link.path);

					subList.appendChild(subListItem);

					(parentElement.children[0])
						? parentElement.children[0].appendChild(subListItem)
						: parentElement.appendChild(subList)

					directoryList = []
					await fetchDocs(link.path)
				}

				if (link.type === "file") {
					subListItem.innerHTML = `<a href="${link.path}"> ${link.name} </a>`;
					subList.appendChild(subListItem);

					(parentElement.children[0])
						? parentElement.children[0].appendChild(subListItem)
						: parentElement.appendChild(subList)

				}

			} else {

				var subList = document.createElement('ul');
				var subListItem = document.createElement('li');

				subListItem.innerHTML = link.name
				subListItem.setAttribute('data-path', link.path)

				subList.appendChild(subListItem)
				linkList.appendChild(subList)

				directoryList = []
				await fetchDocs(link.path)
			}
		}



	} else {
		return console.error("Links must be in an array.")
	}
}

(function () {
	fetchDocs(repoURL)
})()