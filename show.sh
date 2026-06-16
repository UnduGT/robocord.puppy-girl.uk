for d in */; do echo -e "$(find "$d" -maxdepth 1 | wc -l)\t$d"; done | sort -nr
