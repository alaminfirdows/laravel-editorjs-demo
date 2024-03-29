import EditorJS from "@editorjs/editorjs";

window.addEventListener("DOMContentLoaded", (event) => {
    const data = JSON.parse(document.getElementById("blocks").value || "{}");

    const editor = new EditorJS({
        holder: "editorjs",

        onChange: async function () {
            const data = await editor.save();

            document.getElementById("blocks").value = JSON.stringify(data);
        },

        data: data,
    });

    window.editor = editor;
});
